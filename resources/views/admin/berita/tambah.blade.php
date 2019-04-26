@extends('templates.stisla')

@section('title','Berita')

@section('header')
	<div class="section-header">
    <h1>Berita</h1>
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
        <form action="{{ url('berita/save') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Berita</label>
            <div class="col-sm-12 col-md-7">
               <input type="text" class="form-control" name="judul_berita">
            </div>
          </div>
           <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
              <div class="col-sm-12 col-md-7">
                <input type="file" id="file_berita" name="file_berita" class="form-control">
              </div>
            </div>
             <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi Berita</label>
            <div class="col-sm-12 col-md-7">
             <textarea class="form-control" name="isi_berita"></textarea>
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
