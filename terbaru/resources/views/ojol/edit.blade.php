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
        <h3 class="panel-title">Edit Daftar Harga Ojek Online</h3>
      </div>
      <div class="panel-body">
        <form action="/ojol/{{$ojol->id}}/update" method="POST">
          {{csrf_field()}}

          <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Outlet</label>
            <select name="nama_outlet" class="form-control" id="exampleFormControlSelect1">
              <option value="{{$ojol->nama_outlet}}"> {{$ojol->nama_outlet}}</option>
            </select>
          </div>

          <label>Status</label>
          <div class="row" style="border: 1px solid lightgrey; height:35px; margin:auto;">
            <div class="form-check col-md-6" style="margin-left: auto; padding:5px;">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Aktif" checked>
              Aktif
            </div>
            <div class="form-check col-md-6" style="margin-left: auto; padding:5px;">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Non-Aktif">
              Non Aktif
            </div>
          </div>
          <hr class="solid">

          <div class="form-group">
            <label for="exampleInputNama">Nama Ojek Online</label>
            <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"
              value="{{$ojol->nama}}">
          </div>
          <div class="form-group">
            <label for="exampleInputNama">Deskripsi</label>
            <input name="deskripsi" type="text" class="form-control" id="exampleInputUrutan " aria-describedby="urutan"
              value="{{$ojol->deskripsi}}">
          </div>

          <hr class="solid">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Produk</label>
            <select name="nama_produk[]" multiple="multiple" class="js-select2 js-states form-control"
              id="exampleFormControlSelect1" style="width: 100%">
              <option value="">-Pilih-</option>
              @foreach ($catat_produk as $item)
              <option value="{{$item->id}}" @foreach ($ojol->catatProduks as
                $produk){{$item->id == $produk->id ? 'selected' : ''}} @endforeach>
                {{$item->nama_produk}}
              </option>

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

@section('custom_scripts')
<!-- SELECT2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
    $(".js-select2").select2({
    placeholder: "Pilih Produk",
    // allowClear: true
  });
});
</script>
@endsection