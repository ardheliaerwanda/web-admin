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

   <!--button -->
    <div class="content-header clearfix">
<ol class="breadcrumb">
@if($loggedIn->role_id == 1)
<li><a href="/pelanggan">Pelanggan</a></li><!-- react-text: 754 --> <!-- /react-text -->
<li><span class="current">Daftar Pelanggan</span></li>
@endif
</ol>
<div class="content-header-action pull-right">

<button type="button" class="btn btn-primary" style="cursor:pointer" data-toggle="modal" data-target="#exampleModal">
<span><i class="fa fa-plus"></i>Tambah Departemen</span>
</button>



</div>
</div>
          <div class="panel">
          <div class="panel-heading">
          <h2 class="panel-title">Daftar Pelanggan</h2>
          </div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                        <th>Kode Pelanggan</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Poin</th>
                        <th>Saldo Deposit</th>
                        <th>Group Pelanggan</th>
                      </tr>
										</thead>
										<tbody>
                    @foreach($data_pelanggan as $pelanggan)
                      <tr>
                        <td>{{$pelanggan->kode_pelanggan}} </td>
                          <td>{{$pelanggan->nama}} </td>
                          <td>{{$pelanggan->Alamat}} </td>
                          <td>{{$pelanggan->no_tlp}} </td>
                          <td>{{$pelanggan->jenis_kelamin}} </td>
                          <td></td>
                          <td></td>
                          <td>{{$pelanggan->group_id}}
                          <td>
                          @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                          <a href="/pelanggan/{{$pelanggan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/pelanggan/{{$pelanggan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
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
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form action="/pelanggan/create" method="POST">
            {{csrf_field()}}

            <div class="form-group">
              <label for="exampleInputKodePelanggan">Kode Pelanggan</label>
              <input name="kode_pelanggan"  type="text" class="form-control" id="exampleInpuKode_Pelanggan" aria-describedby="kode_pelangganHelp">
            </div>


            <div class="form-group">
    <label for="exampleFormControlSelect1">Group Pelanggan</label>
    <select name="group_id" class="form-control" id="exampleFormControlSelect1">
    <option value="">-Pilih-</option>
      @foreach ($group as $item)
      <option value="{{ $item->id}}"> {{$item->nama_group}}</option>
      @endforeach
    </select>
  </div>

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
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
              <option value="P"> Perempuan</option>
              <option value="L">Laki-Laki</option>
            </select>
          </div>

          <div class="form-group">
    <label for="exampleFormControlSelect1">Kota</label>
    <select name="kota_id" class="form-control" id="exampleFormControlSelect1">
      <option value="">-Pilih-</option>
      @foreach ($cities as $item)
      <option value="{{ $item->id}}"> {{$item->nama_kota}}</option>
      @endforeach
    </select>
  </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="Alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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