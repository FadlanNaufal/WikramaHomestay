<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kamar;
use App\User;
use App\Transaksi;
use App\komentar;

class HotelController extends Controller
{
    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function index()
    {
        $totalkamar = kamar::count();
        $totaluser = user::count();
        $pendapatan = Transaksi::sum('total_harga');
        $tersedia = Transaksi::where('statusTempat','kosong')->count();
        $totaltamu = Transaksi::all();
        $terisi = Transaksi::where('statusTempat','terisi')->with('kamar')->latest()->get();
        $kamar = kamar::all();
        $komentar = komentar::all();
        return view('admin.index',compact('totalkamar','totaluser','pendapatan','tersedia','totaltamu','terisi','kamar','komentar'));
    }


      public function tampilUser()
    {
        $totaluser = user::all();

        return view('admin.tampil_user',compact('totaluser'));
    }

    public function hapusUser($id){
         User::destroy($id);
        return back()->withMessage("Berhasil Menghapus");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
         $kamarvvip = kamar::where('kelas_kamar','VVIP')->count();
         $kamarvip = kamar::where('kelas_kamar','VIP')->count();
         $regular = kamar::where('kelas_kamar','REGULAR')->count();
        return view ('admin.data',compact('kamarvvip','kamarvip','regular'));
    }

    public function tamu()
    {
        return view('admin.tamu');
    }

    public function pemasukan()
    {
        return view('admin.pemasukan');
    }
}
