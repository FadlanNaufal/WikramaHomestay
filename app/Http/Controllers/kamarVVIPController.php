<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kamar;
use Validator;

class kamarVVIPController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    public function index(){
    	return view ('admin.kamar.index');
    }

    public function detailVvip($id){
        $tampilvvip = kamar::findOrFail($id);
        return view ('admin.kamar.detailvvip',compact('tampilvvip'));
    }

    public function save(Request $request){
        	$validator = Validator::make($request->all(), [
             'nomor_kamar'=>'required',
             'nama_kamar'=>'required',               
             'kapasitas_kamar'=>'required',
             'harga'=>'required',
             'nama_fitur'=>'required',
             'keterangan'=>'required',
            'file_gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);


            $gambar = $request->file('file_gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('file_gambar')->move('uploadgambar', $namaFile);
            $do = new kamar($request->all());
            $do->file_gambar = $namaFile;
            $do->save();
            
            return back()->withMessage("Berhasil");

    }

    public function validasi($request){
    	$this->validate($request,[
            'nomor_kamar'=>'required',
            'nama_kamar'=>'required',               
            'kapasitas_kamar'=>'required',
            'harga'=>'required',
            'jenis_fitur'=>'required',
             'file_gambar'=>'required|image']);
    }

    public function tampilvvip(){
         $data = kamar::where('kelas_kamar','VVIP')->get();
        return view('admin.kamar.dataVVip',compact('data'));
    }

      public function printvvip(){
         $data = kamar::where('kelas_kamar','VVIP')->get();
        return view('admin.kamar.printvvip',compact('data'));
    }

    public function tampilvip(){
         $data = kamar::where('kelas_kamar','VIP')->get();
        return view('admin.kamar.dataVip',compact('data'));
    }

    public function printvip(){
         $data = kamar::where('kelas_kamar','VIP')->get();
        return view('admin.kamar.printvip',compact('data'));
    }

    public function tampilreg(){
         $data = kamar::where('kelas_kamar','REGULAR')->get();
        return view('admin.kamar.dataReg',compact('data'));
    }

       public function hapusVvip($id){
        kamar::destroy($id,'kelas_kamar','VVIP');
        return back()->withMessage("Berhasil Menghapus");
    }
    public function hapusVip($id){
        kamar::destroy($id,'kelas_kamar','VIP');
        return back()->withMessage("Berhasil Menghapus");
    }
    public function hapusReg($id){
        kamar::destroy($id,'kelas_kamar','REGULAR');
        return back()->withMessage("Berhasil Menghapus");
    }
     public function editReg($id){
        $data = kamar::where('id',$id)->first();
        return view('admin.kamar.editReg',compact('data'));
    }
    public function editVvip($id){
        $data = kamar::where('id',$id)->first();
        return view('admin.kamar.editVvip',compact('data'));
    }
    public function update(Request $request,$id){
        $this->validasi($request);
        kamar::where('id',$id)->update([
        'nomor_kamar'=>$request->nomor_kamar,
        'nama_kamar'=>$request->nama_kamar,
        'kapasitas_kamar'=>$request->kapasitas_kamar,
        'kelas_kamar'=>$request->kelas_kamar,
        'harga'=>$request->harga,
        ]);

        return back()->withMessage('terupdate');
    }

    public function list(){
        return [
            'data'=>kamar::latest()->get(),
            'status'=>'success',
        ];
    }

    public function ajax_kelas($kelas)
    {
        $kamar = [];
        $data = kamar::where('kelas_kamar',$kelas)->with('transaksi')->get();

        foreach ($data as $field) {
           
                $kamar[] = $field;
           
        }

        return $kamar;
    }

    public function ajax_kamar_detail($id)
    {
        $data = kamar::where('id',$id)->first();
        return view('user.transaksi.load_detail',compact('data'));
    }

    


}
