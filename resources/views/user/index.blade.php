@extends('templates.stisla-user')

@section('title','User Dashboard')
<style>
  .card.card-primary{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
  }
  #img {
    opacity: 0.7;
    filter: alpha(opacity=50);
    background-color: black;
     /* For IE8 and earlier */
}


#img:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}

.text-block {
    position: absolute;
    bottom: 16px;
    right: 29px;
    background-color:#404040;
    opacity: 1.0;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
}
</style>
@section('content')
<div class="container">
   <div class="row">
    <div class="col-md-12">
      <img src="{{asset('dist/img/bg_user.png')}}" id="imgbg" style="width: 100%;height: 450px;">
      <div class="text-block">
        <h4>Ngendongin</h4>
        <p>Hotel Bintang Lima , Harga Merakyat !</p>
      </div>
    </div>  
  </div>
</div>
  <br>
<div class="container-fluid">
  <h2 class="section-title">TOP 3 Room</h2>
  <div class="row"  style="height: 76%">
     <div class="col-md-4">  
        <div class="column" style="box-shadow: 200px !important">
          <div class="card card-primary">
            <img src="{{ URL::to('uploadgambar/'.$regular->file_gambar) }}" id="img" style="width:100% ; height: 50%;">
            <div class="container">
              <hr>
              <h4>{{$regular->nama_kamar}}</h4>
              <p class="title">Kapasitas Untuk {{ $regular->kapasitas_kamar }} Orang</p>
              <p>{!!$regular->keterangan !!}</p>
            </div>
            <div class="card-footer">
              <a href="{{ Route('kamarUser')}}" style="border-style: none;"><p class="text-right">Lihat Kamar lainya...</p></a>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4">  
        <div class="column" style="box-shadow: 200px !important">
          <div class="card card-primary">
            <img src="{{ URL::to('uploadgambar/'.$datavip->file_gambar) }}" id="img" style="width:100% ; height: 50%;">
            <div class="container">
              <hr>
              <h4>{{$datavip->nama_kamar}}</h4>
              <p class="title">Kapasitas Untuk {{ $datavip->kapasitas_kamar }} Orang</p>
              <p>{!! $datavip->keterangan !!}</p>
             <div class="card-footer">
              <a href="{{ Route('kamarUser')}}" style="border-style: none;"><p class="text-right">Lihat Kamar lainya...</p></a>
            </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4">  
        <div class="column" style="box-shadow: 200px !important">
          <div class="card card-primary">
            <img src="{{ URL::to('uploadgambar/'.$datavvip->file_gambar) }}" id="img" style="width:100% ; height: 50%;">
            <div class="container">
              <hr>
              <h4>{{$datavvip->nama_kamar}}</h4>
              <p class="title">Kapasitas Untuk {{ $datavvip->kapasitas_kamar }} Orang</p>
              <p>{!! $datavvip->keterangan !!}</p>
             <div class="card-footer">
              <a href="{{ Route('kamarUser')}}" style="border-style: none;"><p class="text-right">Lihat Kamar lainya...</p></a>
            </div>
            </div>
          </div>
        </div>
    </div>
</div>
<h2 class="section-title">Kenapa Pakai Ngendongin ?</h2>
  <div class="row">
    <div class="col-md-4">
      <img src="{{asset('dist/img/p-250.png')}}">
    </div>
    <div class="col-md-8" style="margin-top: 20px;">
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque suscipit aliquam, pariatur vitae iste quisquam, assumenda. Debitis deserunt illum natus, doloribus aspernatur expedita explicabo veritatis perferendis nihil blanditiis dicta. Delectus.
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis itaque, eum ab modi officiis nam omnis illo. Quibusdam temporibus repudiandae officiis, necessitatibus veritatis assumenda, officia eos, obcaecati autem quisquam ex.</p>
    </div>
  </div>
<br>
   <div class="row">
    <div class="col-md-8" style="margin-top: 20px;">
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque suscipit aliquam, pariatur vitae iste quisquam, assumenda. Debitis deserunt illum natus, doloribus aspernatur expedita explicabo veritatis perferendis nihil blanditiis dicta. Delectus.
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis itaque, eum ab modi officiis nam omnis illo. Quibusdam temporibus repudiandae officiis, necessitatibus veritatis assumenda, officia eos, obcaecati autem quisquam ex.</p>
    </div>
    <div class="col-md-4">
      <img src="{{asset('dist/img/p-250.png')}}">
    </div>
  </div>

</div>
<br><br><br><br>
<div class="container">
    <div class="row">
    <div class="col-md-4">
      <h3 style="color: black;">OUR HOTEL PARTNER</h3>
      <p style="text-decoration: underline;">Partner Hotel Dalam dan Luar Negeri</p>
     Kami bekerja sama dengan berbagai jaringan hotel di seluruh dunia untuk memastikan kenyamanan Anda saat menginap di belahan dunia manapun!
    </div>
    <div class="col-md-4">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a href="#" data-toggle="tooltip" title="Hotel Partner Kami" data-placement="bottom">
              <img src="{{asset('dist/img/visa.png')}}" alt="" style="width: 100%;height: 90%;">
            </a>
          </div>
          <div class="col-md-4">
             <a href="#" data-toggle="tooltip" title="Hotel Partner Kami" data-placement="bottom">
              <img src="{{asset('dist/img/paypal.png')}}" alt="" style="width: 100%;height: 90%;">
            </a>
          </div>
          <div class="col-md-4">
             <a href="#" data-toggle="tooltip" title="Hotel Partner Kami" data-placement="bottom">
              <img src="{{asset('dist/img/mastercard.png')}}" alt="" style="width: 100%;height: 90%;">
            </a>
          </div>
          <div class="col-md-4">
             <a href="#" data-toggle="tooltip" title="Hotel Partner Kami" data-placement="bottom">
              <img src="{{asset('dist/img/americanexpress.png')}}" alt="" style="width: 100%;height: 90%;">
            </a>
          </div>
          <div class="col-md-4">
             <a href="#" data-toggle="tooltip" title="Hotel Partner Kami" data-placement="bottom">
              <img src="{{asset('dist/img/dinersclub.png')}}" alt="" style="width: 100%;height: 90%;">
            </a>
          </div>
          <div class="col-md-4">
            <a href="#" data-toggle="tooltip" title="Hotel Partner Kami" data-placement="bottom">
              <img src="{{asset('dist/img/discover.png')}}" alt="" style="width: 100%;height: 90%;">
            </a>
          </div>
          <div class="col-md-4">
            <a href="#" data-toggle="tooltip" title="Hotel Partner Kami" data-placement="bottom">
              <img src="{{asset('dist/img/paypal.png')}}" alt="" style="width: 100%;height: 90%;">
            </a>
          </div>
          <div class="col-md-4">
            <a href="#" data-toggle="tooltip" title="Hotel Partner Kami" data-placement="bottom">
              <img src="{{asset('dist/img/mastercard.png')}}" alt="" style="width: 100%;height: 90%;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@stop
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
