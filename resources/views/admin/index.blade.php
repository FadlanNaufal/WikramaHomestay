@extends('templates.stisla')

@section('title','Admin Dashboard')
<style>
.kotak{
	width: 100%;
	height: 40px;
	margin-left: 60px;
	background-color: #C1BDBD;
	border-radius: 10px;
}
.carousel-inner img {
    width: 100%;
    height: 100%;
  }
</style>
@section('header')
	<div class="section-header">
    <h1>Admin Dashboard</h1>
  </div>
@endsection
@section('content')
 <div class="row">  
    
     <div class="col-lg-3 col-md-6 col-md-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="fas fa-bed" style="padding-top: 25px;"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4><a href="{{url('admin/data')}}">Total Room</a></h4>
          </div>
          <div class="card-body">
            {{$totalkamar}}
          </div>
        </div>
      </div>
    </div>
     <div class="col-lg-3 col-md-6 col-md-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-user-alt" style="padding-top: 25px;"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4><a href="{{url('admin/tampil')}}">Total User</a></h4>
          </div>
          <div class="card-body">
             {{$totaluser}}
          </div>
        </div>
      </div>
    </div>
     <div class="col-lg-3 col-md-6 col-md-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-file-invoice-dollar" style="padding-top: 25px;"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Currency</h4>
          </div>
          <div class="card-body">
           <h6> RP. {{ number_format($pendapatan) }}</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-md-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-file-invoice-dollar" style="padding-top: 25px;"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Latest Success Transaction</h4>
          </div>
          <div class="card-body">
            {{$tersedia}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
       <div class="card">
      <div class="card-header">
        <div class="card-title"><h5 style="font-weight: bold;"><a href="{{url('transaksi/tampil')}}" style="text-decoration:none;">Riwayat Transaksi</a></h5></div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-2">
                <thead>                                 
                  <tr>
                    <th>
                      No
                    </th>
                    <th>Nama Kamar</th>
                    <th>Nama Pemesan</th>
                    <th>Harga</th>
                    <th>Lama sewa</th>
                    <th>Waktu</th>
                  </tr>
                </thead>
                <tbody> 
                @foreach($totaltamu as $tampil)                                
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$tampil->kamar->nama_kamar}}</td>
                    <td>{{$tampil->nama_pemesan}}</td>                    
                    <td>RP{{number_format($tampil->kamar->harga)}}</td>
                    <td>{{$tampil->hari}} Hari</td>
                    <td>{{$tampil->created_at->diffForHumans()}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
     <div class="col-md-6">
       <div class="card">
      <div class="card-header">
        <div class="card-title"><h5 style="font-weight: bold;">Komentar Pengguna</h5></div>
          </div>
          <div class="card-body">
             <table class="table table-responsive">
               <tbody>
                 @foreach($komentar as $tampil)                                
                  <tr>
                    <td><img src="{{ asset('dist/img/avatar/avatar-2.png') }}" style="width: 30px;height: 50%;"></td>
                    <td>{{$tampil->nama}}</td>
                    <td style="width: 200px;background-color: #808080;color: white;border-radius: 10px;font-size: 14px;margin-top: 20px;">
                      {{$tampil->komentar}}
                    </td>
                    <td style="font-size: 10px;">{{$tampil->created_at->diffForHumans()}}</td>
                  </tr>
                  @endforeach
               </tbody>
             </table>
          </div>
      </div>
    </div>

    </div>

@stop
