@extends('templates.stisla')

@section('title','Data Kamar')

@section('header')
	<div class="section-header">
    <h1>Data Kamar</h1>
    <a href="{{url('/kamar')}}" class="btn btn-primary" style="margin-left: 900px;">tambah kamar</a>
  </div>
@endsection
@section('content')
<div class="row">

	<div class="col-md-4">
		<div class="card">
			<div class="card-header">VVIP Class</div>
			 <div class="card-body">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				    </ol>
				    <div class="carousel-inner">
				      <div class="carousel-item active">
				        <img class="d-block w-100" src="{{ asset('dist/img/hotel.jpg') }}" alt="First slide" class="img-thumbnail">
				        <div class="carousel-caption d-none d-md-block">
				    		</div>
				      </div>
				      <div class="carousel-item">
				        <img class="d-block w-100" src="{{ asset('dist/img/kamar.jpg') }}" alt="Second slide" class="img-thumbnail">
				        <div class="carousel-caption d-none d-md-block">
				  	  </div>
				      </div>
				      <div class="carousel-item">
				        <img class="d-block w-100" src="{{ asset('dist/img/kamar.jpg') }}" alt="Third slide" class="img-thumbnail">
				        <div class="carousel-caption d-none d-md-block">
				  	  </div>
				      </div>
				    </div>
				   
				  </div>
				  <br>
				  <p>
				  	<span class="row">
				  		<h5 class="text-center">
				  			Jumlah kamar
				  		</h5>
				  	</span>
				  	<br>
				  	<span class="row">
				  		<h4 style="margin-left: 154px;">
				  			{{$kamarvvip}}
				  		</h4>
				  	</span>
				  </p>
		     </div>
		     <div class="card-footer">
		     	<div class="row">
		     		<div class="col-md-4">
		     			<a href="{{url('kamar/vvip/data')}}" class="btn btn-info">Lihat Data</a>
		     		</div>
		     	</div>
		     </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">VIP Class</div>
			 <div class="card-body">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				    </ol>
				    <div class="carousel-inner">
				      <div class="carousel-item active">
				        <img class="d-block w-100" src="{{ asset('dist/img/hotel.jpg') }}" alt="First slide" class="img-thumbnail">
				        <div class="carousel-caption d-none d-md-block">
				    		</div>
				      </div>
				      <div class="carousel-item">
				        <img class="d-block w-100" src="{{ asset('dist/img/kamar.jpg') }}" alt="Second slide" class="img-thumbnail">
				        <div class="carousel-caption d-none d-md-block">
				  	  </div>
				      </div>
				      <div class="carousel-item">
				        <img class="d-block w-100" src="{{ asset('dist/img/kamar.jpg') }}" alt="Third slide" class="img-thumbnail">
				        <div class="carousel-caption d-none d-md-block">
				  	  </div>
				      </div>
				    </div>
				   
				  </div>
				  <br>
				 <p>
				  	<span class="row">
				  		<h5 class="text-center">
				  			Jumlah kamar
				  		</h5>
				  	</span>
				  	<br>
				  	<span class="row">
				  		<h4 style="margin-left: 154px;">
				  			{{$kamarvip}}
				  		</h4>
				  	</span>
				  </p>
		     </div>
		     <div class="card-footer">
		     	<div class="row">
		     		<div class="col-md-4">
		     			<a href="{{url('kamar/vip/data')}}" class="btn btn-info">Lihat Data</a>
		     		</div>
		     		<div class="col-md-3"></div>
		     	</div>
		     </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">Regular Class</div>
			 <div class="card-body">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				    </ol>
				    <div class="carousel-inner">
				      <div class="carousel-item active">
				        <img class="d-block w-100" src="{{ asset('dist/img/hotel.jpg') }}" alt="First slide" class="img-thumbnail">
				        <div class="carousel-caption d-none d-md-block">
				    		</div>
				      </div>
				      <div class="carousel-item">
				        <img class="d-block w-100" src="{{ asset('dist/img/kamar.jpg') }}" alt="Second slide" class="img-thumbnail">
				        <div class="carousel-caption d-none d-md-block">
				  	  </div>
				      </div>
				      <div class="carousel-item">
				        <img class="d-block w-100" src="{{ asset('dist/img/kamar.jpg') }}" alt="Third slide" class="img-thumbnail">
				        <div class="carousel-caption d-none d-md-block">
				  	  </div>
				      </div>
				    </div>
				   
				  </div>
				  <br>
				  <p>
				  	<span class="row">
				  		<h5 class="text-center">
				  			Jumlah kamar
				  		</h5>
				  	</span>
				  	<br>
				  	<span class="row">
				  		<h4 style="margin-left: 154px;">
				  			{{$regular}}
				  		</h4>
				  	</span>
				  </p>
		     </div>
		     <div class="card-footer">
		     	<div class="row">
		     		<div class="col-md-4">
		     			<a href="{{url('kamar/regular/data')}}" class="btn btn-info">Lihat Data</a>
		     		</div>
		     		<div class="col-md-3"></div>
		     	</div>
		     </div>
		</div>
	</div>
</div>

@stop