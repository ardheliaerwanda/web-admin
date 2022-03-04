@extends('template')

@section('content')
            <div class="modal-body">
            <form action="/pelanggan/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputNama">Nama</label>
              <input name="nama"  type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
            </div>
            
            <div class="form-group">
            <label for="exampleInputTanggal">Tanggal</label>
            <input name="tanggal" type="date" class="form-control">
            <div>

            <div class="form-group">
              <label for="exampleInputNama">No. Telepon</label>
              <input name="no_tlp"  type="text" class="form-control" id="exampleInputNo_tlp" aria-describedby="no_telpHelp">
            </div>
  <div class="form-group">
    <label for="exampleInputNama">Email</label>
    <input name="email"  type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
		<label for="exampleInputPassword"> Password </label>
		<input name="password" type="password" class="form-control  " id="password" aria-describedby="passwordHelp">
	</div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
      <option value="P"> Perempuan</option>
      <option value="L">Laki-Laki</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="Alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Hak Akses</label>
    <select name="role" class="form-control" id="exampleFormControlSelect1">
      <option value="2">Staff</option>
      <option value="3">Finance</option>
    </select>
  </div>
  
  </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
             </div>
  
</form>
            
            </div>
         </div>
        </div>

@endsection