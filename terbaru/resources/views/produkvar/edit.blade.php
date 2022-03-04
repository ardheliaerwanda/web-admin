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

     
      <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Edit Produk Varian</h3>
      </div>
      <div class="panel-body">
        <form action="/produkvar/{{$produkvar_table->id}}/update" method="POST"  enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
              <label for="exampleInputNama">Nama Produk Varian</label>
              <input name="nama_produkvar" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" value="{{$produkvar_table->nama_produkvar}}">
          </div>

            <label>Cara Pilih Varian</label>
            <div class="row" style="border: 1px solid lightgrey; height:35px; margin:auto;">
            <div class="form-check col-md-6" style="margin-left: auto; padding:5px;">
                <input class="form-check-input" type="radio" name="carapilih" id="exampleRadios1" value="pilihsatu" checked >
                    Pilih Satu
            </div>
            <div class="form-check col-md-6" style="margin-left: auto; padding:5px;">
                <input class="form-check-input" type="radio" name="carapilih" id="exampleRadios2" value="pilihbanyak">
                    Pilih Banyak
            </div>
            </div>

            <hr class="solid">

            <div class="row mb-sm"><div class="col-sm-12"><label class="control-label">MASUKKAN PRODUK VARIAN</label></div></div>
            <div class="form-group" style="padding:10px;">
              <label for="exampleInputNama">Pilihan Produk Varian</label>
              <input name="pilihanvar" type="text" class="form-control" id="exampleInputUrutan "
                aria-describedby="urutan" value="{{$produkvar_table->pilihanvar}}">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="exampleInputNama">Harga Modal (RP)</label>
              <input name="harga_modal" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"  placeholder="RP 0" value="{{$produkvar_table->harga_modal}}">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputNama">Harga Jual (RP)</label>
              <input name="harga_jual" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"  placeholder="RP 0" value="{{$produkvar_table->harga_jual}}">
            </div>
            </div>
            

          <button type="submit" class="btn btn-warning">Update</button>

        </form>
      </div>
    </div>
  </div>
</div>

@endsection