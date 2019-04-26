<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Transaksi;
use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;
use DB;

class TransaksiController extends Controller
{
    protected $request;

     public function __construct(Request $request)
    {
        $this->request = $request;
 
        // Set midtrans configuration
        Veritrans_Config::$serverKey = config('services.midtrans.serverKey');
        Veritrans_Config::$isProduction = config('services.midtrans.isProduction');
        Veritrans_Config::$isSanitized = config('services.midtrans.isSanitized');
        Veritrans_Config::$is3ds = config('services.midtrans.is3ds');
    }


    public function index()
    {
        return view('user.transaksi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil()
    {   
        $data = Transaksi::where('statusTempat','terisi')->with('kamar')->latest()->get();
        return view('user.transaksi.tampil',compact('data'));
    }


    public function KamarSelesaiApi(){
       return [
            'data'=>Transaksi::where('statusTempat','kosong')->with('kamar')->latest()->get(),
            'status'=>'success',
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function save(Request $request)
    // {
    //     $validator = Validator::make($request->all(),[
    //         'kamar_id'=>'required',
    //         'harga'=>'required',
    //         'hari'=>'required',
    //         'nama_pemesan'=>'required',
    //         // 'total_harga'=>'required',
    //     ]);

    //     $harga = $request->harga;
    //     $hari = $request->hari;
    //     $total = $harga * $hari;

    //     $simpan = Transaksi::create([
    //         'kamar_id'=>$request->kamar_id,
    //         'hari'=>$request->hari,
    //         'nama_pemesan'=>$request->nama_pemesan,
    //         'total_harga'=>$harga*$hari,
    //         'user_id'=>'0',
    //     ]);

    //     return back()->withMessage("Berhasil Memesan");
    // }


    public function submitDonation(Request $request)
    {   
         $validator = Validator::make($request->all(),[
            'kamar_id'=>'required',
            'harga'=>'required',
            'hari'=>'required',
            'nama_pemesan'=>'required',
            // 'total_harga'=>'required',
        ]);

        $bayar = Transaksi::create([
           'kamar_id'=>$request->kamar_id,
            'hari'=>$request->hari,
            'nama_pemesan'=>$request->nama_pemesan,
            'total_harga'=>$request->harga*$request->hari,
            'user_id'=>'0',
        ]);

        // Buat transaksi ke midtrans kemudian save snap tokennya.
       $payload = [
                'transaction_details' => [
                    'order_id'      => $bayar->id,
                    'gross_amount'  => $request->harga * $request->hari,
                ],
                'customer_details' => [
                    'first_name'    => $request->nama_pemesan,
                    'email'         => 'abcbcb@gmail.com'
                    // 'phone'         => '08888888888',
                    // 'address'       => '',
                ],
                'item_details' => [
                    [
                        'id'       => $bayar->id,
                        'price'    => $request->harga,
                        'quantity' => $request->hari,
                        'name'     => $request->nama_pemesan
                    ]
                ]
            ];
        $snapToken = Veritrans_Snap::getSnapToken($payload);
        $bayar->snap_token = $snapToken;
        $bayar->save();

        // Beri response snap token
        $this->response['snap_token'] = $snapToken;
        

        return response()->json($this->response);
    }

   public function notificationHandler(Request $request)
    {
        $notif = new Veritrans_Notification();
        \DB::transaction(function() use($notif) {
 
          $transaction = $notif->status;
          $orderId = $notif->kamar_id;
          $donation = Transaksi::findOrFail($orderId);
 
          if ($transaction == 'capture') {
 
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
 
              if($fraud == 'challenge') {
                // TODO set payment status in merchant's database to 'Challenge by FDS'
                // TODO merchant should decide whether this transaction is authorized or not in MAP
                // $donation->addUpdate("Transaction kamar_id: " . $orderId ." is challenged by FDS");
                $donation->setPending();
              } else {
                // TODO set payment status in merchant's database to 'Success'
                // $donation->addUpdate("Transaction kamar_id: " . $orderId ." successfully captured using " . $type);
                $donation->setSuccess();
              }
 
            }
 
          } elseif ($transaction == 'settlement') {
 
            // TODO set payment status in merchant's database to 'Settlement'
            // $donation->addUpdate("Transaction kamar_id: " . $orderId ." successfully transfered using " . $type);
            $donation->setSuccess();
 
          } elseif($transaction == 'pending'){
 
            // TODO set payment status in merchant's database to 'Pending'
            // $donation->addUpdate("Waiting customer to finish transaction kamar_id: " . $orderId . " using " . $type);
            $donation->setPending();
 
          } elseif ($transaction == 'deny') {
 
            // TODO set payment status in merchant's database to 'Failed'
            // $donation->addUpdate("Payment using " . $type . " for transaction kamar_id: " . $orderId . " is Failed.");
            $donation->setFailed();
 
          } elseif ($transaction == 'expire') {
 
            // TODO set payment status in merchant's database to 'expire'
            // $donation->addUpdate("Payment using " . $type . " for transaction kamar_id: " . $orderId . " is expired.");
            $donation->setExpired();
 
          } elseif ($transaction == 'cancel') {
 
            // TODO set payment status in merchant's database to 'Failed'
            // $donation->addUpdate("Payment using " . $type . " for transaction kamar_id: " . $orderId . " is canceled.");
            $donation->setFailed();
 
          }
 
        });
 
        return;
    }

    public function validasi($request){
        $this->validate($request,[
            'statusTempat'=>'required',
        ]);
    }

   public function update(Request $request,$id){
        // $this->validasi($request);
        Transaksi::where('id',$id)->update([
        'statusTempat'=>'kosong',
        ]);
        return back()->withMessage('Check Out Selesai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function hapus($id){
        Transaksi::destroy($id);
        return back()->withMessage("Berhasil Batal");
    }
}
