@extends('templates.stisla')

@section('title','Admin Dashboard')
@section('header')
    <div class="section-header">
    <h1>Admin Dashboard</h1>
  </div>
@endsection
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tanggapi Komentar Pengguna</h1>
            <form action="{{ url('admin/sendemail') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="judul">Subject:</label>
                    <input type="text" class="form-control" id="judul" name="subject"/>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan:</label>
                    <textarea class="form-control" id="pesan" name="pesan"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Send Email</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection