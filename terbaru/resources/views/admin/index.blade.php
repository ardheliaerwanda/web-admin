@extends('template')


@section('content')
        <div class="row">
          <div class="col-md-12">
          <div class="container">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
    @endif
          <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Admin</h3>
                  <div class="right">
                    @if($loggedIn->role_id == 1)
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle" ></i></button>
                    @endif
                  </div> 
								</div>
    
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
										</thead>
										<tbody>
                    @foreach($data_admin as $admin)
                      <tr>
                          <td>{{$admin->nama}} </td>
                          <td>{{$admin->jenis_kelamin}} </td>
                          <td>{{$admin->no_tlp}} </td>
                          <td>{{$admin->email}} </td>
                          <td>{{$admin->Alamat}} </td>
                          <td>
                          @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                          <a href="/adminn/{{$admin->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/adminn/{{$admin->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
                          @endif
                          </td>
                      </tr>
                    @endforeach
										</tbody>
									</table>
								</div>
							</div>
          </div>
        </div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                         <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form action="/adminn/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputNama">Nama</label>
              <input name="nama"  type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
            </div>

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
      <option value="1">Administrator</option>
      <option value="2">Staff</option>
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