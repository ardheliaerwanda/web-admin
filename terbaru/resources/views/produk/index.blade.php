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
@if($loggedIn->role_id == 1)
<button type="button" class="btn btn-primary" style="cursor:pointer" data-toggle="modal" data-target="#exampleModal">
<span><i class="fa fa-plus"></i>Tambah Produk</span>
@endif
</button>
</div>
</div>

      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Daftar Produk</h3>
          <div class="right">

          </div>
        </div>

        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Photo</th>
                <th>Deskripsi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($produk as $produk)
              <tr>
                <td>{{$produk->nama}} </td>
                <td>{{$produk->harga}} </td>
                <td>
                  <img src="{{ asset('admin/assets/produk/' . $produk->foto) }}" alt="foto-produk" width="100"
                    height="100" class="img-thumbnail img-fluid">
                </td>
                {{-- <td>{{$produk->foto}} </td> --}}

                <td>{{$produk->deskripsi}} </td>
                <td>
                  @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                  <a href="/produk/{{$produk->id}}/edit" class="btn btn-outline-secondary">Edit</a>
                  <a href="/produk/{{$produk->id}}/delete" class="btn btn-danger btn-sm"
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Daftar Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/produk/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputNama">Nama</label>
              <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputNama">Photo</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
              {{-- <img src="{{ asset('admin/assets/img/user-medium.png') }}"> --}}
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Deskripsi</label>
              <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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