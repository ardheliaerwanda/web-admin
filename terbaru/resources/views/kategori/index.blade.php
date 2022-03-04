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
<li><span class="current">Daftar Kategori</span></li>
</ol>
<div class="content-header-action pull-right">

<button type="button" class="btn btn-primary" style="cursor:pointer" data-toggle="modal" data-target="#exampleModal">
<span><i class="fa fa-plus"></i>Tambah Kategori</span>
</button>
</div>
</div>

<div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"> Daftar Kategori</h3>
        </div>

        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nama Kategori</th>
                <th>Urutan</th>
                <th>Jumlah Produk</th>
                <th>Departemen</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($kategori as $kategori)
              <tr>
                <td>{{$kategori->nama_kategori}} </td>
                <td>{{$kategori->urutan}} </td>
                <td>
                  {{ $kategori->catatProduks->count() }}
                </td>
                <td>{{$kategori->nama_departemen}} </td>
                <td>{{$kategori->status}} </td>
                
                <td>
                  @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                  <a href="/kategori/{{$kategori->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                  <a href="/kategori/{{$kategori->id}}/delete" class="btn btn-danger btn-sm"
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/kategori/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Outlet</label>
                <select name="nama_outlet" class="form-control" id="exampleFormControlSelect1">
                <option value="">-Pilih-</option>
                @foreach ($outlet as $item)
                <option value="{{$item->nama_outlet}}"> {{$item->nama_outlet}}</option>
                @endforeach
                </select>
            </div>
            <hr class="solid">
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
              <label for="exampleInputNama">Nama Kategori</label>
              <input name="nama_kategori" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputNama">Urutan</label>
              <input name="urutan" type="text" class="form-control" id="exampleInputUrutan "
                aria-describedby="urutan">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Departemen</label>
                <select name="nama_departemen" class="form-control" id="exampleFormControlSelect1">
                <option value="">-Pilih-</option>
                @foreach ($departemen as $item)
                <option value="{{$item->nama_departemen}}"> {{$item->nama_departemen}}</option>
                @endforeach
                </select>
            </div>
            <hr class="solid">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Produk</label>
            <select name="nama_produk[]" multiple="multiple" class="js-select2 form-control"
              id="exampleFormControlSelect1" style="width: 100%">
              <option value="">-Pilih-</option>

              @foreach ($catat_produk as $item)
              <option value="{{$item->id}}"> {{$item->nama_produk}}</option>
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