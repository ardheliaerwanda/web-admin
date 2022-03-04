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

      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

<div class="content-header clearfix">
<ol class="breadcrumb">
<li><a href="/item">Produk</a></li><!-- react-text: 754 --> <!-- /react-text -->
<li><span class="current">Daftar Produk</span></li>
</ol>
<div class="content-header-action pull-right">
<button type="button" class="btn btn-primary" style="cursor:pointer" data-toggle="modal" data-target="#exampleModal">
<span><i class="fa fa-plus"></i>Tambah Produk</span>
</button>



</div>
</div>

      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Daftar Produk</h3>
          <div class="right">
            @if($loggedIn->role_id == 1)
            
            @endif
          </div>
        </div>

        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Produk</th>
                <th>SKU</th>
                <th>Group</th>
                <th>Kategori</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($catat_produk as $catat_produk)
              <tr>
                <td>{{$catat_produk->nama_produk}} </td>
                <td>{{$catat_produk->sku}} </td>
                <td>{{$catat_produk->nama_group}} </td>
                <td>{{$catat_produk->nama_kategori}} </td>
                <td>{{$catat_produk->harga}} </td>
                <td>{{$catat_produk->harga_jual}} </td>
                <td>
                  @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                  <a href="/catatproduk/{{$catat_produk->id}}/edit" class="btn btn-outline-secondary">Edit</a>
                  <a href="/catatproduk/{{$catat_produk->id}}/delete" class="btn btn-danger btn-sm"
                    onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
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
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Daftar Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body " style="overflow-y: scroll; max-height:50%;  margin-top: 10px; margin-bottom:10px;">
          <form action="/catatproduk/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputNama">Nama</label>
                      <input name="nama_produk" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNama">Photo</label>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
                      {{-- <img src="{{ asset('admin/assets/img/user-medium.png') }}"> --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori</label>
                        <select name="nama_kategori" class="form-control" id="exampleFormControlSelect1">
                        <option value="">-Pilih-</option>
                        @foreach ($kategori as $item)
                        <option value="{{$item->nama_kategori}}"> {{$item->nama_kategori}}</option>
                        @endforeach
                        </select>
                    </div>
            <div class="row mb-lg">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
            </div>


            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="harganstock" aria-selected="true">HARGA & STOCK</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="resep" aria-selected="true">PRODUK VARIAN</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="productvar" aria-selected="true">GROUP</a>
                </li>
            </ul>

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
                
  <div class="form-row">
    <div class="form-group col-md-3">
                <label for="inputSatuan">Satuan</label>
                <select name="nama_satuan" class="form-control" id="inputSatuan" >
                <option value="">--PILIH--</option>
                @foreach ($satuan as $item)
                <option value="{{$item->nama_satuan}}"> {{$item->nama_satuan}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputNama">Harga Beli</label>
              <input name="harga" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"  placeholder="RP 0">
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputNama">Harga Jual</label>
              <input name="harga_jual" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"  placeholder="RP 0">
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputNama">SKU</label>
              <input name="sku" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"  placeholder="SKU">
            </div>
  </div>


</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="margin:auto;">
                <div class="form-group">
                <label for="inputSatuan">Pilih Produk Varian</label>
                <select name="nama_produkvar" class="form-control" id="inputSatuan" >
                <option value="">--PILIH--</option>
                @foreach ($produkvar_table as $item)
                <option value="{{$item->nama_produkvar}}"> {{$item->nama_produkvar}}</option>
                @endforeach
                </select>
            </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="form-group">
                <label for="inputSatuan">Pilih Group</label>
                <select name="nama_group" class="form-control" id="inputSatuan" >
                <option value="">--PILIH--</option>
                <option value="-"> Tanpa Induk Group</option>
                </select>
            </div>
                </div>
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