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
          <a href="{{url('kamar/vvip/print1')}}" class="btn btn-warning">Print Data</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>                                 
                <tr>
                  <th class="text-center">
                    No
                  </th>
                  <th>Nomor Kamar</th>
                  <th>Nama Kamar</th>
                  <th>Kapasitas kamar</th>                  
                  <th>Harga</th>
                  <th>Keterangan</th>
                  <th>Fitur</th>
                  <th>Foto Kamar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody> 
              @foreach($data as $tampil)                                
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$tampil->nomor_kamar}}</td>
                  <td>{{$tampil->nama_kamar}}</td>
                  <td>{{$tampil->kapasitas_kamar}}</td>
                  <td>{{$tampil->harga}}</td>
                  <td>{!!$tampil->keterangan!!}</td>
                  <td>{{$tampil->nama_fitur}}</td>
                  <td>
                    <img src="{{ URL::to('uploadgambar/'.$tampil->file_gambar) }}" alt="" style="width:100px" class="img-thumbnail">
                  </td>
                  <td>
                      <a href="{{url('kamar/hapusVvip/'.$tampil->id)}}" class="btn btn-danger" onclick="return confirm('Confirm delete?')">Hapus
                      <a href="{{url('kamar/editVvip/'.$tampil->id)}}" class="btn btn-info">Edit
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

