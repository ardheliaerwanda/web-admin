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
          <h3 class="panel-title">Catat Produk</h3>
          <div class="right">
            @if($loggedIn->role_id == 1)
            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i
                class="lnr lnr-plus-circle"></i></button>
            @endif
          </div>
        </div>
    

<div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"> Daftar Departemen</h3>
        </div>

        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Departemen</th>
                <th>Urutan</th>
                <th>Jumlah Kategori</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($departemen as $departemen)
              <tr>
                <td>{{$departemen->nama}} </td>
                <td>{{$departemen->urutan}} </td>
                <td>{{$departemen->jumlah_kategori}} </td>
                <td>
                  @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                  <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModal2">Tetapkan Kategori</button>
                  <a href="/departemen/{{$departemen->id}}/delete" class="btn btn-danger btn-sm"
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


<div class="active side-popup-wrap">
<form novalidate="">
<div class="side-popup" role="presentation" style="width: 600px; padding-bottom: 74px;"
><div class="side-popup-body">
<div class="nano" style="height: 100%;">
<div style="position: relative; overflow: hidden; width: 100%; height: 100%;">
<div style="position: absolute; inset: 0px; overflow: scroll; margin-right: -17px; margin-bottom: -17px;">
<!-- react-empty: 825 -->
<div class="nano-content" style="position: relative;">
<div class="side-popup-body-inner">
<div>
<h4 class="side-popup-title">Tambah Departemen</h4>
<div class="row mb-lg">
<div class="col-sm-12">
<div class="form-group">
<label class="control-label">Nama Departemen</label>
<input type="text" class="form-control" name="name" placeholder="Nama Departemen" value="" required="" maxlength="" title="" spellcheck="false" autocomplete="nope">
</div>
<!-- react-empty: 1294 -->
</div>
</div>
<div class="row mb-lg">
<div class="col-sm-12">
<div class="form-group">
<label class="control-label">
<!-- react-text: 1299 -->Urutan<!-- /react-text -->
</label>
<div class="currency-input-wrap">
<input type="text" class="form-control" name="order" placeholder="Urutan" value="99" required="" maxlength="5">
<input type="text" class="pseudo-input" value="99" readonly="" style="visibility: visible;">
</div>
</div>
<!-- react-empty: 1303 -->
</div>
</div>
</div>
</div>
</div>
</div>
<div class="track-horizontal" style="display: none;">
<div style="position: relative; display: block; height: 100%; cursor: pointer; border-radius: inherit; background-color: rgba(0, 0, 0, 0.2); width: 0px;">
</div>
</div>
<div style="position: absolute; width: 6px; right: 2px; bottom: 2px; top: 2px; border-radius: 3px;">
<div style="position: relative; display: block; width: 100%; cursor: pointer; border-radius: inherit; background-color: rgba(0, 0, 0, 0.2); height: 0px;">
</div>
</div>
</div>
</div>
</div>
<div class="side-popup-footer">
<div class="row">
<div class="col-xs-2">
</div>
<div class="col-xs-10 text-right">
<button type="button" class="btn">Batal</button>
<button type="button" class=" btn btn-primary">Simpan</button>
</div>
<!-- react-text: 838 --><!-- /react-text -->
</div>
</div>
</div>
</form>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Departemen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/departemen/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputNama">Nama</label>
              <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputNama">Urutan</label>
              <input name="urutan" type="text" class="form-control" id="exampleInputUrutan "
                aria-describedby="urutan">
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



<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Departemen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/departemen/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-check" value="{{$departemen->id}}">

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