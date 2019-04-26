@extends('templates.stisla')

@section('title','Kamar Regular')

@section('header')
	<div class="section-header">
    <h1>Kamar Regular</h1>
  </div>
@endsection
@section('content')

  <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Basic DataTables</h4>s
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
                            <td><a href="{{url('kamar/hapusReg/'.$tampil->id)}}" class="btn btn-danger btnDelete">Hapus
                            <a href="{{url('kamar/editReg/'.$tampil->id)}}" class="btn btn-info btnDelete">edit</a>
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
@stop