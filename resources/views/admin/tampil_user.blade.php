@extends('templates.stisla')

@section('title','Data User')

@section('header')
  <div class="section-header">
    <h1>Data User</h1>
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
                  <th>nama</th>
                  <th>Password</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody> 
              @foreach($totaluser as $tampil)                                
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$tampil->name}}</td>
                  <td>{{$tampil->password}}</td>
                  <td>
                     <a href="{{url('admin/hapusUser/'.$tampil->id)}}" class="btn btn-danger" onclick="return confirm('Confirm delete?')">Hapus
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

