@extends('templates.stisla')

@section('title','Berita')

@section('header')
	<div class="section-header">
    <h1>Berita</h1>
    <a href="{{url('/berita')}}" class="btn btn-primary" style="margin-left: 900px;">tambah berita</a>
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
                  <th>Judul Berita</th>
                  <th>isi Berita</th>                  
                  <th>Foto</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody> 
              @foreach($data as $tampil)                                
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$tampil->judul_berita}}</td>
                  <td>{{$tampil->isi_berita}}</td>
                  <td>
                    <img src="{{ URL::to('uploadgambar/'.$tampil->file_berita) }}" alt="" style="width:100px" class="img-thumbnail">
                  </td>
                  <td>
                      <a href="{{url('berita/hapus/'.$tampil->id)}}" class="btn btn-danger" onclick="return confirm('Confirm delete?')">Hapus
                      <a href="{{url('berita/editVvip/'.$tampil->id)}}" class="btn btn-info">Edit
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
