@extends('templates.stisla')

@section('title','Kamar VVIP')

@section('header')
	<div class="section-header">
    <h1>Kamar VVIP</h1>
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
        <form action="{{ url('kamar/VVIP/update/'.$data->id) }}" method="post">
          @csrf
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Kamar</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nomor_kamar" value="{{$data->nomor_kamar}}">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kamar</label>
            <div class="col-sm-12 col-md-7">
               <input type="text" class="form-control" name="nama_kamar" value="{{$data->nama_kamar}}">
            </div>
          </div>
         <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kapasitas Kamar</label>
          <div class="col-sm-12 col-md-7">
             <input type="number" class="form-control" name="kapasitas_kamar" value="{{$data->kapasitas_kamar}}">
          </div>
          </div>
          <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelas Kamar</label>
          <div class="col-sm-12 col-md-7">
                <select name="kelas_kamar" class="form-control">
                  <option @if(old('kelas_kamar',$data->kelas_kamar) == 'VVIP') selected @endif >
                                 VVIP
                  </option>
                   <option @if(old('kelas_kamar',$data->kelas_kamar) == 'VIP') selected @endif >
                                 VIP
                  </option>
                   <option @if(old('kelas_kamar',$data->kelas_kamar) == 'REGULAR') selected @endif >
                                 REGULAR
                    </option>
                  </select>
          </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">harga</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="harga" value="{{$data->harga}}" >
            </div>
          </div>
          <div class="form-group row mb-4" style="margin-left: 120px;">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Update</button>
              <button class="btn btn-warning" style="margin-left: 40px;">Kembali</button>
            </div>
          </div>
        </form>  
      </div>
    </div>
  </div>
</div>

@stop