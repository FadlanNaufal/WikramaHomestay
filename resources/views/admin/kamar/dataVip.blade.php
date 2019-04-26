@extends('templates.stisla')

@section('title','Kamar VIP')

@section('header')
	<div class="section-header">
    <h1>Kamar VIP</h1>
  </div>
@endsection
@section('content')

<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <a href="{{url('kamar/vip/print2')}}" class="btn btn-warning">Print Data</a>
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
                            <th>Kapasitas</th>
                            <th>Status</th>
                            <th>harga</th>
                            <th>Foto</th>
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
                            <td><div class="badge badge-info">Tersedia</div></td>
                            <td>{{$tampil->harga}}</td>
                            <td>
                              <img src="{{ URL::to('uploadgambar/'.$tampil->file_gambar) }}" alt="" class="img-thumbnail" style="width: 300px;">
                            </td>
                            <td><a href="{{url('kamar/hapusVip/'.$tampil->id)}}" class="btn btn-danger btnDelete">Hapus</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@stop