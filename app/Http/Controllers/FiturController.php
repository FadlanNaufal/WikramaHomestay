<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Fitur;

class FiturController extends Controller
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
        $data = Fitur::all();
        return view('admin.fitur.index',compact('data'));
    }

    public function tambah()
    {
        return view('admin.fitur.tambah');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
             'jenis_fitur'=>'required',
             'file_fitur'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'nama_fitur'=>'required',               
          ]);

             $gambar = $request->file('file_fitur');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('file_fitur')->move('uploadgambar', $namaFile);
            $do = new Fitur($request->all());
            $do->file_fitur = $namaFile;
            $do->save();
            
            return back()->withMessage("Fitur Berhasil ditambahkan");
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
        Fitur::destroy($id);
        return back()->withMessage('terhapus');
    }

    public function listFitur(){
        return [
            'data'=>Fitur::latest()->get(),
            'status'=>'success',
        ];
    }

}
