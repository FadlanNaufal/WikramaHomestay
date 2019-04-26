@extends('templates.stisla')

@section('title','Tambah Data Kamar')

@section('header')
	<div class="section-header">
    <h1>Tambah Data Kamar</h1>
  </div>
@endsection
@section('content')
<div class="row">
  <div class="col-12">
		 <div class="card">
      <div class="card-header">
        <h6 style="color: red;font-size: 10px;">*Isi Data Dengan Benar</h6>
      </div>
      <div class="card-body">
        <form action="{{ url('kamar/save') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Kamar</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nomor_kamar" onfocus="this.value=''" value="Masukkan Nomor Kamar">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kamar</label>
            <div class="col-sm-12 col-md-7">
               <input type="text" class="form-control" name="nama_kamar">
            </div>
          </div>
         <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kapasitas Kamar</label>
          <div class="col-sm-12 col-md-7">
             <input type="number" class="form-control" name="kapasitas_kamar">
          </div>
          </div>
          <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelas Kamar</label>
          <div class="col-sm-12 col-md-7">
             <div class="form-group">
                <select name="kelas_kamar" class="form-control">
                  <option value="" selected disabled="">Pilih Jenis</option>
                  <option value="VVIP">VVIP</option>
                  <option value="VIP">VIP </option>
                  <option value="REGULAR">Regular</option>
                </select>
              </div>
          </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">harga</label>
            <div class="col-sm-12 col-md-7">
             <input type="number" name="harga" class="form-control">
            </div>
          </div>
           <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
              <div class="col-sm-12 col-md-7">
                <input type="file" id="file_gambar" name="file_gambar" class="form-control">
              </div>
            </div>
            <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fitur</label>
            <div class="col-sm-12 col-md-7">
               <div class="form-group">
                  <select name="nama_fitur" id="fitur" class="form-control" multiple="multiple">
                    @foreach($fitur as $key => $user)
                    <option value="{{ $key }}">{{ $user }}</option>
                    @endforeach
                  </select>
                </div>
            </div>
            </div>
             <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
            <div class="col-sm-12 col-md-7">
             <textarea name="keterangan" id="" cols="30" rows="10" class="form-control summernote-simple"></textarea>
            </div>
          </div>
          <div class="form-group row mb-4" style="margin-left: 120px;">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Tambah</button>
              <button class="btn btn-warning" style="margin-left: 40px;">Kembali</button>
            </div>
          </div>
        </form>  
      </div>
    </div>
  </div>
</div>

@stop
