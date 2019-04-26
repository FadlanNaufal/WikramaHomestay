@extends('templates.stisla')

@section('title','Riwayat')

@section('header')
	<div class="section-header">
    <h1>Riwayat</h1>
  </div>
@endsection
@section('content')

<div class="container">
	<h3 class="text-center">Tamu</h3>
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Jumlah Tamu Hari ini</div>
				<div class="card-body">
					<h3 class="text-center">99</h3>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Total Jumlah Tamu</div>
				<div class="card-body">
					<h3 class="text-center">99</h3>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<select class="form-control">
						<option value="" selected disabled="">Pilih Hari</option>
						<option value="">Senin</option>
						<option value="">Selasa</option>
						<option value="">Rabu</option>
					</select>
				</div>
				<div class="card-body">
					<h3 class="text-center">99</h3>
				</div>
			</div>
		</div>
	</div>


	<h3 class="text-center">Pendapatan</h3>
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Jumlah Pendapatan Hari ini</div>
				<div class="card-body">
					<h3 class="text-center">Rp.99999999</h3>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Total Jumlah Pendapatan</div>
				<div class="card-body">
					<h3 class="text-center">Rp.99999999</h3>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<select class="form-control">
						<option value="" selected disabled="">Pilih Hari</option>
						<option value="">Senin</option>
						<option value="">Selasa</option>
						<option value="">Rabu</option>
					</select>
				</div>
				<div class="card-body">
					<h3 class="text-center">Rp.99999999</h3>
				</div>
			</div>
		</div>
	</div>
</div>

@stop