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
        <h3 class="panel-title">Edit Data Group</h3>
      </div>
      <div class="panel-body">
        <form action="/group/{{$data_group->id}}/update" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}

          <div class="form-group">
            <label for="exampleInputNama">Nama</label>
            <input name="nama_group" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"
              value="{{$data_group->nama_group}}">
          </div>

                    <div class="form-group">
                <label for="exampleFormControlSelect1">Status Group</label>
                <select name="status_id" class="form-control" id="exampleFormControlSelect1">
                <option value="">-Pilih-</option>
                @foreach ($status as $item)
                <option value="{{ $item->id}}"> {{$item->nama_status}}</option>
                @endforeach
                </select>
            </div>


                        <div class="form-group">
                        <label for="exampleInputNama">Deskripsi Group</label>
                        <input name="deskripsi"  type="text" class="form-control" id="exampleInputDeskripsi" aria-describedby="deskripsiHelp"
                        value="{{$data_group->deskripsi}}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputUrutan">Urutan</label>
                        <input name="urutan" type="test" class="form-control" id="exampleInputUrutan" aria-describedby="urutanHelp"
                        value="{{$data_group->urutan}}">
                        </div>

                        <div class="form-group">
                <label for="exampleFormControlSelect1">Atur Pelanggan</label>
                <select name="pelanggan_id" class="form-control" id="exampleFormControlSelect1">
                <option value="">-Pilih-</option>
                @foreach ($data_pelanggan as $item)
                <option value="{{ $item->id}}"> {{$item->nama}}</option>
                @endforeach
                </select>
            </div>

                            
            <div class="form-group">
                <label for="exampleFormControlSelect1">Atur Harga</label>
                <select name="harga_id" class="form-control" id="exampleFormControlSelect1">
                <option value="">-Pilih-</option>
                @foreach ($harga as $item)
                <option value="{{ $item->id}}"> {{$item->nama}}</option>
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