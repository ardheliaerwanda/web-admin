@extends('template')

@section('content')
<div class="row">
  <div class="col-md-12">

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Edit Catat Produk</h3>
      </div>
      <div class="panel-body">
        <form action="/catatproduk/{{$catat_produk->id}}/update" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputNama">Nama</label>
            <input name="nama_produk" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"
              value="{{$catat_produk->nama_produk}}">
          </div>
          <div class="form-group">
            <label for="exampleInputNama">Photo</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
            <img src="{{ asset('admin/assets/produk/' . $catat_produk->foto) }}" alt="foto-produk" width="200"
              height="200" class="img-fluid img-thumbnail">
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
          <div class="form-group">
                  <label for="exampleFormControlTextarea1">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$catat_produk->deskripsi}}</textarea>
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
              <input name="harga" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"  placeholder="RP 0" value="{{$catat_produk->harga}}">
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputNama">Harga Jual</label>
              <input name="harga_jual" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"  placeholder="RP 0" value="{{$catat_produk->harga_jual}}">
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputNama">SKU</label>
              <input name="sku" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"  placeholder="SKU" value="{{$catat_produk->sku}}">
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


          
          <button type="submit" class="btn btn-warning">Update</button>

        </form>
      </div>
    </div>
  </div>
</div>


@endsection