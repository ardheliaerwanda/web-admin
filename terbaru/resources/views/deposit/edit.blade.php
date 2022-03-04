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
        <h3 class="panel-title">Edit Deposit</h3>
      </div>
      <div class="panel-body">
        <form action="/deposit/{{$deposit->id}}/update" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Outlet</label>
                <select name="nama_outlet" class="form-control" id="exampleFormControlSelect1">
                <option value="{{$deposit->nama_outlet}}"> {{$deposit->nama_outlet}}</option>
                </select>
            </div>

            <hr class="solid">

            <div class="form-group">
            <label for="exampleInputNama">Photo</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
            <img src="{{ asset('admin/assets/produk/' . $deposit->foto) }}" alt="foto-produk" width="200"
              height="200" class="img-fluid img-thumbnail">
          </div>
            <div class="form-group">
              <label for="exampleInputNama">Nama Deposit</label>
              <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" value="{{$deposit->nama}}">
            </div>
            <div class="form-group">
              <label for="exampleInputNama">Harga Jual</label>
              <input name="harga_jual" type="text" class="form-control" id="exampleInputUrutan "
                aria-describedby="urutan" value="{{$deposit->harga_jual}}">
            </div>

            <hr class="solid">

            <label>Status</label>
            <div class="row" style="border: 1px solid lightgrey; height:35px; margin:auto;">
            <div class="form-check col-md-6" style="margin-left: auto; padding:5px;">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="aktif" checked>
                    Aktif
            </div>
            <div class="form-check col-md-6" style="margin-left: auto; padding:5px;">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="off">
                    Off
            </div>
            </div>

            <hr class="solid">

            <label>Masa Berlaku</label>
            <div class="row" style="border: 1px solid lightgrey; height:35px; margin:auto;">
            <div class="form-check col-md-6" style="margin-left: auto; padding:5px;">
                <input class="form-check-input" type="radio" name="masa_berlaku" id="exampleRadios3" value="1bulan" checked>
                    1 Bulan
            </div>
            <div class="form-check col-md-6" style="margin-left: auto; padding:5px;">
                <input class="form-check-input" type="radio" name="masa_berlaku" id="exampleRadios4" value="custom">
                    Custom
            </div>
            </div>

            <hr class="solid">

             <div class="form-group">
              <label for="exampleInputNama">Nominal Deposit</label>
              <input name="nominal_deposit" type="text" class="form-control" id="exampleInputUrutan "
                aria-describedby="nominal_deposit" value="{{$deposit->nominal_deposit}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Produk</label>
                <select name="nama_produk" class="form-control" id="exampleFormControlSelect1">
                <option value="">-Pilih-</option>
                @foreach ($catat_produk as $item)
                <option value="{{$item->nama_produk}}"> {{$item->nama_produk}}</option>
                @endforeach
                </select>
            </div>


          <button type="submit" class="btn btn-warning">Update</button>

        </form>
      </div>
    </div>
  </div>
</div>


@endsection