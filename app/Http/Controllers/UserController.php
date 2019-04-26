<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\komentar;
use Validator;
use App\Berita;
use App\kamar;
use Hash;

class UserController extends Controller
{


    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    
    public function index(){
         $berita = Berita::paginate(3);
         $datavvip = kamar::where('kelas_kamar','VVIP')->with('transaksi')->first();
         $datavip = kamar::where('kelas_kamar','VIP')->with('transaksi')->first();
         $regular = kamar::where('kelas_kamar','REGULAR')->with('transaksi')->first();
        return view('user.index',compact('berita','datavvip','datavip','regular'));
    }

    public function login(Request $request){
         $email = $request->input('email');
        
        $password = $request->input('password');


        $hashedPassword = User::where('email', $email)->first();



        $user = User::where('email',$request->email)->first();
     if ($hashedPassword && Hash::check($password, $hashedPassword->password)) {
            $data = ['status'=>'success','code'=>'200','data'=> $user];
        }else{
            $data = ['status'=>'failed','code'=>'201'];
        }
        
        return response()->json($data);
    }

    public function komentar(){
        return view('user/komentar');
    }
    public function save(Request $request){
        $validator = Validator::make($request->all(),[
            'nama'=>'required',
            'komentar'=>'required'
        ]);

        $simpan = komentar::create([
            'nama'=>$request->nama,
            'komentar'=>$request->komentar
        ]);

        return back()->withMessage("komentar dikirim ! terima kasih");
    }

    public function lihatkamar(){
        $all = kamar::latest()->paginate(3);
        $datavvip = kamar::where('kelas_kamar','VVIP')->paginate(3);
        $datavip = kamar::where('kelas_kamar','VIP')->get();
        $regular = kamar::where('kelas_kamar','REGULAR')->get();

        return view('user.kamar.index',compact('all','datavvip','datavip','regular'));
    }
}


