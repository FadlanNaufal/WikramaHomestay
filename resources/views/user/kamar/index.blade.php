@extends('templates.stisla-user')

@section('title','User Dashboard')
<style>
  .tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

/* Change background color of buttons on hover */
.tablink:hover {
  background-color: #777;
}

/* Set default styles for tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}
  
  .card.card-primary{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
  }
  p{
    color: black;
  }
  h5{
    color: black;
  }


/* Style each tab content individually */
#semuakamar {background-color:white;}
#kamarvvip {background-color:white;}
#kamarvip {background-color:white;}
#regular {background-color:white;}
</style>
@section('content')
<h5 style="color: red;">* pilih kelas kamar</h5>
      <button class="tablink" onclick="openCity('semuakamar', this, '#7f8c8d')" id="defaultOpen">Semua Kamar</button>
      <button class="tablink" onclick="openCity('kamarvvip', this, 'gray')">Kamar VVIP</button>
      <button class="tablink" onclick="openCity('kamarvip', this, 'gray')">Kamar VIP</button>
      <button class="tablink" onclick="openCity('regular', this, 'gray')">Regular</button>

      <div id="semuakamar" class="tabcontent">
          <h1 style="color: black;">Semua Kamar</h1>
           @if (count($all) > 0)
            <div class="infinite-scroll">
                 @foreach($all as $tampil)
                     <div class="card card-primary">
                       <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4">
                           <img src="{{ URL::to('uploadgambar/'.$tampil->file_gambar) }}" alt=""  class="img-thumbnail">
                          </div>
                          <div class="col-md-4">
                             <div class="form-group row">
                               <label>Nama Kamar</label>
                               <input type="text" value="{{$tampil->nama_kamar}}" class="form-control" readonly>
                             </div>
                             <div class="form-group row">
                               <label>Nama Kamar</label>
                               <input type="text" value="{{$tampil->nama_kamar}}" class="form-control" readonly>
                             </div>
                             <div class="form-group row">
                               <label>Harga Kamar</label>
                               <input type="text" value="{{$tampil->harga}}" class="form-control" readonly>
                             </div>
                             <div class="form-group row">
                               @if($tampil->transaksi['statusTempat'] == "terisi")
                                  <button class="btn btn-danger">Terisi</button>
                               @elseif($tampil->transaksi['statusTempat'] == "kosong")
                                  <button class="btn btn-primary">Kosong</button>
                               @endif
                             </div>
                          </div>
                           <div class="col-md-4">
                            <h5 style="color: black;">Keterangan</h5>
                            <p>
                              {!!$tampil->keterangan!!}
                            </p>
                          </div>
                        </div>
                      </div>
                   </div>
                 </div>
                 @endforeach
                 {{$all->links()}}
             </div>
             @endif
        </div>

        </div>

        <div id="kamarvvip" class="tabcontent">
          <h1 style="color: black;">Kamar VVIP</h1>
           @if (count($datavvip) > 0)
            <div class="infinite-scroll-vvip">
                 @foreach($datavvip as $tampil)
                     <div class="card card-primary">
                       <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4">
                           <img src="{{ URL::to('uploadgambar/'.$tampil->file_gambar) }}" alt=""  class="img-thumbnail">
                          </div>
                          <div class="col-md-4">
                             <div class="form-group row">
                               <label>Nama Kamar</label>
                               <input type="text" value="{{$tampil->nama_kamar}}" class="form-control" readonly>
                             </div>
                             <div class="form-group row">
                               <label>Nama Kamar</label>
                               <input type="text" value="{{$tampil->nama_kamar}}" class="form-control" readonly>
                             </div>
                             <div class="form-group row">
                               <label>Harga Kamar</label>
                               <input type="text" value="{{$tampil->harga}}" class="form-control" readonly>
                             </div>
                          </div>
                           <div class="col-md-4">
                            <h5 style="color: black;">Keterangan</h5>
                            <p>
                              {!!$tampil->keterangan!!}
                              
                            </p>
                          </div>
                        </div>
                      </div>
                   </div>

                   <div class="card-footer">
                     @if($tampil->transaksi['statusTempat'] == "terisi")
                       <p>Status Tempat</p> <button class="btn btn-danger">Terisi</button>
                     @else
                        <p>Status Tempat</p> <button class="btn btn-info">Kosong</button>
                     @endif
                   </div>

                 </div>
                 @endforeach
                 {{$datavvip->links()}}
             </div>
             @endif
        </div>

        <div id="kamarvip" class="tabcontent">
          <h1 style="color: black;">Kamar VIP</h1>
           @foreach($datavip as $tampil)
               <div class="card card-primary">
                 <div class="card-body">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                     <img src="{{ URL::to('uploadgambar/'.$tampil->file_gambar) }}" alt=""  class="img-thumbnail">
                    </div>
                    <div class="col-md-4">
                       <div class="form-group row">
                         <label>Nama Kamar</label>
                         <input type="text" value="{{$tampil->nomor_kamar}}" class="form-control" readonly>
                       </div>
                       <div class="form-group row">
                         <label>Nama Kamar</label>
                         <input type="text" value="{{$tampil->nama_kamar}}" class="form-control" readonly>
                       </div>
                       <div class="form-group row">
                         <label>Harga Kamar</label>
                         <input type="text" value="{{$tampil->harga}}" class="form-control" readonly>
                       </div>
                    </div>
                    <div class="col-md-4">
                      <h5 style="color: black;">Keterangan</h5>
                      <p>
                        {!!$tampil->keterangan!!}
                      </p>
                    </div>
                  </div>
                </div>
             </div>
             <div class="card-footer">
               @if($tampil->transaksi['statusTempat'] == "terisi")
                 <p>Status Tempat</p> <button class="btn btn-danger">Terisi</button>
               @else
                  <p>Status Tempat</p> <button class="btn btn-info">Kosong</button>
               @endif
             </div>
           </div>
           @endforeach
        </div>

        <div id="regular" class="tabcontent">
          <h1 style="color: black;">Regular</h1>
           @foreach($regular as $tampil)
               <div class="card card-primary">
                 <div class="card-body">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                     <img src="{{ URL::to('uploadgambar/'.$tampil->file_gambar) }}" alt=""  class="img-thumbnail">
                    </div>
                    <div class="col-md-4">
                       <div class="form-group row">
                         <label>Nomor Kamar</label>
                         <input type="text" value="{{$tampil->nomor_kamar}}" class="form-control" readonly>
                       </div>
                       <div class="form-group row">
                         <label>Nama Kamar</label>
                         <input type="text" value="{{$tampil->nama_kamar}}" class="form-control" readonly>
                       </div>
                       <div class="form-group row">
                         <label>Harga Kamar</label>
                         <input type="text" value="{{$tampil->harga}}" class="form-control" readonly>
                       </div>
                    </div>
                    <div class="col-md-4">
                      <h5 style="color: black;">Keterangan</h5>
                      <p>
                        {!!$tampil->keterangan!!}
                      </p>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="card-footer">
                 @if($tampil->transaksi['statusTempat'] == "terisi")
                   <p>Status Tempat</p> <button class="btn btn-danger">Terisi</button>
                 @else
                    <p>Status Tempat</p> <button class="btn btn-info">Kosong</button>
                 @endif
               </div>
             </div>
           </div>
           @endforeach
        </div>

        </div>   

@stop
<script>



  function openCity(cityName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(cityName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click(); 
</script>

