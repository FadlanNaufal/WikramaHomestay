@extends('templates.stisla')

@section('title','Fitur')

@section('header')
	<div class="section-header">
    <h1>Fitur</h1>
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
        <form action="{{ url('fitur/save') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Fitur</label>
            <div class="col-sm-12 col-md-7">
             <input type="text" name="nama_fitur" class="form-control" required="">
            </div>
          </div>
           <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
              <div class="col-sm-12 col-md-7">
                <input type="file" id="file_fitur" name="file_fitur" class="form-control">
              </div>
            </div>
           <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Fitur</label>
          <div class="col-sm-12 col-md-7">
             <div class="form-group">
                <select name="jenis_fitur" class="form-control" required="">
                  <option value="" selected disabled="">Pilih Jenis</option>
                  <option value="konsumsi">konsumsi</option>
                  <option value="internet">internet </option>
                  <option value="lain">lainnya</option>
                </select>
              </div>
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