@extends('templates.stisla')

@section('title','Laporan Sewa')

@section('header')
  <div class="section-header">
    <h1>Laporan Sewa</h1>
  </div>
@endsection
@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Laporan Sewa</h4>
        </div>
        <div class="card-header">
          <form action="{{url('laporan/tampil')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="">Dari Tanggal</label>
              <input type="date" name="tgl_awal" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Sampai Tanggal</label>
            <input type="date" name="tgl_akhir" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-primary">Cari</button>
          </div>
          </form>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>              
              <button class="btn btn-primary" onclick="window.print()">Print Data</button>                   
                <tr>
                  <th class="text-center">
                    No
                  </th>
                  <th>Nama Pemesan</th>
                  <th>Nama Kamar</th>
                  <th>Total Bayar</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($laporan as $show)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$show->nama_pemesan}}</td>
                  <td>{{$show->kamar->nama_kamar}}</td>
                  <td>{{$show->total_harga}}</td>
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

