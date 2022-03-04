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
<li><span class="current">Deposit</span></li>
</ol>
<div class="content-header-action pull-right">

<button type="button" class="btn btn-primary" style="cursor:pointer" data-toggle="modal" data-target="#exampleModal">
<span><i class="fa fa-plus"></i>Tambah Deposit</span>
</button>
</div>
</div>

<div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"> Daftar Deposit</h3>
        </div>

        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nama Deposit</th>
                <th>Harga</th>
                <th>Masa Berlaku</th>
                <th>Outlet</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($deposit as $deposit)
              <tr>
                <td>{{$deposit->nama}} </td>
                <td>{{$deposit->harga_jual}} </td>
                <td>{{$deposit->masa_berlaku}} </td>
                <td>{{$deposit->nama_outlet}} </td>
                <td>{{$deposit->status}} </td>
                
                <td>
                  @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                  <a href="/deposit/{{$deposit->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                  <a href="/deposit/{{$deposit->id}}/delete" class="btn btn-danger btn-sm"
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
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Deposit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/deposit/create" method="POST" enctype="multipart/form-data">
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

            <div class="form-group">
                      <label for="exampleInputNama">Photo</label>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
                      {{-- <img src="{{ asset('admin/assets/img/user-medium.png') }}"> --}}
                    </div>
            <div class="form-group">
              <label for="exampleInputNama">Nama Deposit</label>
              <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputNama">Harga Jual</label>
              <input name="harga_jual" type="text" class="form-control" id="exampleInputUrutan "
                aria-describedby="urutan">
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
                aria-describedby="nominal_deposit">
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



