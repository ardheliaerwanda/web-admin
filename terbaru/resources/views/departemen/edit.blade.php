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
        <h3 class="panel-title">Edit Daftar Departemen</h3>
      </div>
      <div class="panel-body">
        <form action="/departemen/{{$departemen->id}}/update" method="POST" >
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputNama">Nama</label>
            <input name="nama_departemen" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"
              value="{{$departemen->nama_departemen}}">
          </div>
          <div class="form-group">
            <label for="exampleInputNama">Urutan</label>
            <input name="urutan" type="text" class="form-control" id="exampleInputurutan" aria-describedby="urutanHelp"
              value="{{$departemen->urutan}}">
          </div>
          <hr class="solid">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Kategori</label>
            <select name="nama_kategori[]" multiple="multiple" class="js-select2 js-states form-control"
              id="exampleFormControlSelect1" style="width: 100%">
              <option value="">-Pilih-</option>
              @foreach ($kategori as $item)
              <option value="{{$item->id}}" @foreach ($departemen->kategoris as
                $kategori){{$item->id == $kategori->id ? 'selected' : ''}} @endforeach>
                {{$item->nama_kategori}}
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
    placeholder: "Pilih Kategori",
    // allowClear: true
  });
});
</script>
@endsection