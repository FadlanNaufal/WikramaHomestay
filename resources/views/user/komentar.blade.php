@extends('templates.stisla-user')

@section('title','Komentar')

@section('header')
	<div class="section-header">
    <h1>Komentar</h1>
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
        <form action="{{ url('user/komentar/save') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama </label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama">
            </div>
          </div>
            <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Komentar</label>
            <div class="col-sm-12 col-md-7">
             <textarea name="komentar" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group row mb-4" style="margin-left: 120px;">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Tambah</button>
              <a href="{{url('user/')}}" class="btn btn-warning" style="margin-left: 40px;">Kembali</a href="">
            </div>
          </div>
        </form>  
      </div>
    </div>
  </div>
</div>

@stop
