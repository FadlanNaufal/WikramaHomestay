@extends('templates.stisla')

@section('title','Transaksi')

@section('header')
  <div class="section-header">
    <h1>Transaksi</h1>
  </div>
@endsection
@section('content')
<div class="row">
  <div class="col-12">
     <div class="card">
      <div class="card-header">
        <h6 style="color: red;font-size: 10px;">*Isi Data Dengan Benar</h6>
      </div>
      <div class="card-body">
          <!-- <form action="{{ url('transaksi/save') }}" method="post" enctype="multipart/form-data" > -->
        <form class="form-horizontal" id="donation">
            @csrf
           <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pemesan</label>
              <div class="col-sm-12 col-md-7">
                 <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" required>
              </div>
            </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Kelas Kamar</label>
            <div class="col-sm-12 col-md-7">
               <div class="form-group">
                 <select name="kelas_kamar" id="kelas_select" class="form-control" required>
                    <option value="" selected >Pilih Jenis</option>
                    <option value="vvip">VVIP</option>
                    <option value="vip">VIP</option>
                    <option value="regular">Regular</option>
                  </select>
                </div>
            </div>
            </div>
             <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Kamar</label>
              <div class="col-sm-12 col-md-7">
                 <div class="form-group">
                   <select name="kamar_id" id="kamar_select" class="form-control" required>
                      
                    </select>
                  </div>
              </div>
            </div>

           <!--  <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                 <div id="local_load"></div>
              </div>
            </div> -->

            <div id="local_load"></div>

          <div class="form-group row mb-4" style="margin-left: 120px;">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary" type="submit">Bayar</button>
              <button class="btn btn-warning" style="margin-left: 40px;">Kembali</button>
            </div>
          </div>
        </form>  
      </div>
    </div>
  </div>
</div>

@stop

@section('script')
<script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
    $("#kamar_select").attr("disable","disable");
    $('#kelas_select').change(function(){
      $('#kamar_select').html("");
      var value = $(this).val();
      if (value != null) {
        var options = '<option value=""> Pilih Kelas </option>';
        $.get("{{ url('api/ajax/kamar') }}"+"/"+value,function(data){
          console.log(data);
            $(data).each(function(index,value){
              options += '<option value="'+ value.id+'">'+value.nama_kamar+'</option>';
            });

            $('#kamar_select').html(options);
        }); 
      }
    });

    $('#kamar_select').change(function(){
      var value = $(this).val();
        $('#local_load').load("{{ url('api/ajax/kamar_detail') }}"+"/"+value);
    });

    $('#donation').submit(function(e){
      e.preventDefault();
      $.post("{{ url('api/transaksi/save') }}",
        $(this).serialize(),
        function (data, status) {
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    window.location.href = '/admin';
                },
                // Optional
                onPending: function (result) {
                    window.location.href = '/admin';
                },
                // Optional
                onError: function (result) {
                    location.reload();
                }
            });
        });
        return false;
    });

    function sum() {
      var txtFirstNumberValue = document.getElementById('harga').value;
      var txtSecondNumberValue = document.getElementById('hari').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('subtotal').value = result;
      }
}
    </script>

@stop
