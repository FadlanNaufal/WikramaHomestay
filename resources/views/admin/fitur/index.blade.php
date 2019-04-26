@extends('templates.stisla')

@section('title','Data Fitur')

@section('header')
  <div class="section-header">
    <h1>Data Fitur</h1>
    <a href="{{url('fitur/tambah')}}" class="btn btn-primary" style="margin-left: 900px;">tambah Fitur</a>
  </div>
@endsection
@section('content')
<div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>                                 
                  <tr>
                    <th class="text-center">
                      No
                    </th>
                    <th>Nama Fitur</th>
                    <th>Jenis Fitur</th>
                    <th>Foto Fitur</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody> 
                @foreach($data as $tampil)                                
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$tampil->nama_fitur}}</td>
                    <td>{{$tampil->jenis_fitur}}</td>
                     <td>
                    <img src="{{ URL::to('uploadgambar/'.$tampil->file_fitur) }}" alt="" style="width:100px" class="img-thumbnail">
                  </td>
                    <td><a href="{{url('fitur/hapus/'.$tampil->id)}}" class="btn btn-danger btnDelete">Hapus</td>
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