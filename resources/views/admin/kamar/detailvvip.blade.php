<table class="table table-striped" id="table-1">
              <thead>                                 
                <tr>
                  <th class="text-center">
                    No
                  </th>
                  <th>Nomor Kamar</th>
                  <th>Nama Kamar</th>
                  <th>Kapasitas kamar</th>                  
                  <th>Harga</th>
                  <th>Keterangan</th> 
                </tr>
              </thead>
              <tbody> 
                <tr>
                  <td>{{$tampilvvip->id}}</td>
                  <td>{{$tampilvvip->nomor_kamar}}</td>
                  <td>{{$tampilvvip->nama_kamar}}</td>
                  <td>{{$tampilvvip->kapasitas_kamar}}</td>
                  <td>{{$tampilvvip->harga}}</td>
                  <td>{{$tampilvvip->keterangan}}</td>
                </tr>
              </tbody>
            </table>