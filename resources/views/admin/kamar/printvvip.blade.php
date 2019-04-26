@extends('templates.stisla')

@section('title','Data Print Kamar VVIP')
<style>
  @media print{
    .main-sidebar {
      display: none;
    }
    #tombolprint{
      display: none;
    }
    #tombolback{
      display: none;
    }
    #table{
      border: 2px;
    }
    title{
      display: none;
    }
  }
  .main-sidebar {
      display: none;
    }
    #navbar1{
      display: none;
    }
    #footer{
      display: none;
    }
</style>
@section('header')
@endsection
@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <button class="btn btn-info fas-fa-print" id="tombolprint" onclick="window.print()">Print Data</button>
         <a href="{{url('kamar/vvip/data')}}" class="btn btn-warning" id="tombolback">Kembali</a>
        </div>
        <div class="card-body">
          <h3 class="text-center">Data Kamar VVIP</h3>
          <br>
          <div class="table-responsive">
            <table  class="table table-striped table-bordered" id="table">
              <thead>                                 
                <tr>
                  <th class="text-center">
                    No
                  </th>
                  <th>Nomor Kamar</th>
                  <th>Nama Kamar</th>
                  <th>Kapasitas kamar</th>                  
                  <th>Harga</th>
                  <th>Fitur</th>
                  <th>Keterangan</th>
                  <th>Foto Kamar</th>
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
                  <td>{{$tampil->jenis_fitur}}</td>
                  <td>{!!$tampil->keterangan!!}</td>
                  <td>
                    <img src="{{ URL::to('uploadgambar/'.$tampil->file_gambar) }}" alt="" style="width:100px" class="img-thumbnail">
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

