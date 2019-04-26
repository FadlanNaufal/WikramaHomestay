<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Validator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $data = Berita::all();
        return view('admin.berita.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('admin/berita/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
             'judul_berita'=>'required',
            'file_berita' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'isi_berita'=>'required',               
          ]);


            $gambar = $request->file('file_berita');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('file_berita')->move('uploadgambar', $namaFile);
            $do = new Berita($request->all());
            $do->file_berita = $namaFile;
            $do->save();
            
            return back()->withMessage("Berhasil");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        Berita::destroy($id);
        return back()->withMessage('terhapus');
    }

    public function list(){
        return [
            'data'=>Berita::latest()->get(),
            'status'=>'success',
        ];
    }
}
