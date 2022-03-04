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
<li><span class="current">Daftar Departemen</span></li>
</ol>
<div class="content-header-action pull-right">

<button type="button" class="btn btn-primary" style="cursor:pointer" data-toggle="modal" data-target="#exampleModal">
<span><i class="fa fa-plus"></i>Tambah Departemen</span>
</button>



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
                <td>{{$departemen->nama_departemen}} </td>
                <td>{{$departemen->urutan}} </td>
                <td>
                {{ $departemen->kategoris->count() }}
                </td>
                <td>
                  @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                  <a href="/departemen/{{$departemen->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
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
              <label for="exampleInputNamaDepartemen">Nama</label>
              <input name="nama_departemen" type="text" class="form-control" id="exampleInputNamaDepartemen" aria-describedby="namaHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputNama">Urutan</label>
              <input name="urutan" type="text" class="form-control" id="exampleInputUrutan "
                aria-describedby="urutan">
            </div>

            <hr class="solid">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Kategori</label>
            <select name="nama_kategori[]" multiple="multiple" class="js-select2 form-control"
              id="exampleFormControlSelect1" style="width: 100%">
              <option value="">-Pilih-</option>

              @foreach ($kategori as $item)
              <option value="{{$item->id}}"> {{$item->nama_kategori}}</option>
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
    placeholder: "Pilih Kategori",
    // allowClear: true
  });
});
</script>
@endsection