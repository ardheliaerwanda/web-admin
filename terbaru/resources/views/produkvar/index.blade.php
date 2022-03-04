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
<li><span class="current">Produk Varian</span></li>
</ol>
<div class="content-header-action pull-right">
<button type="button" class="btn btn-primary" style="cursor:pointer" data-toggle="modal" data-target="#exampleModal">
<span><i class="fa fa-plus"></i>Tambah Produk</span>
</button>
</div>
</div>

<div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Daftar Produk Varian</h3>
          <div class="right">
            @if($loggedIn->role_id == 1)
            
            @endif
          </div>
        </div>

        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nama Varian</th>
                <th>Setting Pilihan Varian</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($produkvar_table as $produkvar_table)
              <tr>
                <td>{{$produkvar_table->nama_produkvar}} </td>
                <td>{{$produkvar_table->pilihanvar}} </td>
                <td>
                  @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                  <a href="/produkvar/{{$produkvar_table->id}}/edit" class="btn btn-outline-secondary">Edit</a>
                  <a href="/produkvar/{{$produkvar_table->id}}/delete" class="btn btn-danger btn-sm"
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
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Tambah Produk Varian</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="overflow-y: scroll; max-height:50%;  margin-top: 10px; margin-bottom:10px;">
          <form action="/produkvar/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputNama">Nama Produk Varian</label>
              <input name="nama_produkvar" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
            </div>

            <label>Cara Pilih Varian</label>
            <div class="row" style="border: 1px solid lightgrey; height:35px; margin:auto;">
            <div class="form-check col-md-6" style="margin-left: auto; padding:5px;">
                <input class="form-check-input" type="radio" name="carapilih" id="exampleRadios1" value="pilihsatu" checked>
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
                aria-describedby="urutan">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="exampleInputNama">Harga Modal (RP)</label>
              <input name="harga_modal" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"  placeholder="RP 0">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputNama">Harga Jual (RP)</label>
              <input name="harga_jual" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"  placeholder="RP 0">
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