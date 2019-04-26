			<div class="form-group row mb-4">
	      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
	      <div class="col-sm-12 col-md-7">
	         <img src="{{ asset('uploadgambar/'.$data->file_gambar) }}" alt="" class="img-fluid" name="file_gambar">
	      </div>
	    </div>	
		<div class="form-group row mb-4">
	      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
	      <div class="col-sm-12 col-md-7">
	         <input type="text" value="{{ $data->harga }}" class="form-control" readonly name="harga" id="harga" onkeyup="sum();" >
	      </div>
	    </div>
	    <div class="form-group row mb-4">
	      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Hari Tersedia</label>
	      <div class="col-sm-12 col-md-7">
	         <input type="text" value="" class="form-control" name="hari" id="hari" onkeyup="sum();">
	      </div>
	    </div>
	     <div class="form-group row mb-4">
	      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub total</label>
	      <div class="col-sm-12 col-md-7">
	         <input type="text" value="" class="form-control" readonly  id="subtotal" onkeyup="sum();">
	      </div>
	    </div>
