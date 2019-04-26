@extends('templates.stisla')

@section('title','Data Kamar Terisi')

@section('header')
	<div class="section-header">
    <h1>Data Kamar Terisi</h1>
  </div>
@endsection
@section('content')

<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Kamar</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <form action="" id="submitForm">
                        <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>Nomor Kamar</th>
                            <th>Nama Kamar</th>
                            <th>Lama Sewa</th>
                            <th>Status</th>
                            <th>harga</th>
                            <th>Action</th>
                            <th>Status Bayar</th>
                          </tr>
                        </thead>
                        <tbody> 
                        @foreach($data as $tampil)                                
                          <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$tampil->kamar->nomor_kamar}}</td>
                            <td>{{$tampil->kamar->nama_kamar}}</td>
                            <td>{{$tampil->hari}} Hari</td>
                            <td><div class="badge badge-info">{{$tampil->statusTempat}}</div></td>
                            <td>{{$tampil->total_harga}}</td>
                            <td><a href="{{url('transaksi/update/'.$tampil->id)}}" class="btn btn-warning">Checkout</a>
                            <a href="{{url('transaksi/hapus/'.$tampil->id)}}" class="btn btn-danger">Batal Pesan</a>
                            </td>
                             <td style="text-align: center;">
                                @if ($tampil->status == 'pending')
                                <button class="btn btn-success btn-sm" onclick="snap.pay('{{ $tampil->snap_token }}')">Complete Payment</button>
                                @endif
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@stop
<script>
  function submitForm(){
     function (data, status) {
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    location.reload();
                },
                // Optional
                onPending: function (result) {
                    location.reload();
                },
                // Optional
                onError: function (result) {
                    location.reload();
                }
            });
        
        return false;
  }
</script>
 