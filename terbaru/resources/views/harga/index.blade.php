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
<li><span class="current">Daftar Harga Spesial</span></li>
@endif
</ol>
<div class="content-header-action pull-right">

<button type="button" class="btn btn-primary" style="cursor:pointer" data-toggle="modal" data-target="#exampleModal">
<span><i class="fa fa-plus"></i>Tambah Harga</span>
</button>



</div>
</div>

          <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Daftar Harga Spesial</h3>
                  </div>
    
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Tipe</th>
                                                <th>Deskripsi</th>
                                                <th>Produk Terdaftar</th>
                                                <th>Pelanggan Terdaftar</th>
                                                <th>Status</th>
                                            </tr>
										</thead>
										<tbody>
                    @foreach($harga as $Harga)
                      <tr>
                        <td>{{$Harga->nama}} </td>
                          <td>{{$Harga->deskripsi}} </td>
                          <td>{{$Harga->produk_id}} </td>
                          <td>{{$Harga->group_id}} </td>
                          <td>{{$Harga->nama_status}} </td>
                          <td>
                          @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                          <a href="/harga/{{$Harga->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/harga/{{$Harga->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Group Spesial</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/harga/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}


            <div class="form-group">
            <label for="exampleFormControlSelect1">Status Group</label>
            <select name="nama_status" class="form-control" id="exampleFormControlSelect1">
            <option value="">-Pilih-</option>
            @foreach ($status as $item)
            <option value="{{ $item->nama_status}}"> {{$item->nama_status}}</option>
            @endforeach
            </select>
        </div>

            <div class="form-group">
              <label for="exampleInputNama">Nama</label>
              <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Deskripsi</label>
              <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
    <label for="exampleFormControlSelect1">Group Pelanggan</label>
    <select name="group_id" class="form-control" id="exampleFormControlSelect1">
    <option value="">-Pilih-</option>
      @foreach ($data_group as $item)
      <option value="{{ $item->id}}"> {{$item->nama_group}}</option>
      @endforeach
    </select>
  </div>



        <div class="form-group">
          <label for="exampleFormControlSelect1">Atur Produk</label>
          <select name="produk_id" class="form-control" id="exampleFormControlSelect1">
          <option value="">-Pilih-</option>
            @foreach ($produk as $item)
            <option value="{{ $item->id}}"> {{$item->nama_produk}}</option>
            @endforeach
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