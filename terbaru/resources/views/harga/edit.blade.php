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
        <form action="/harga/{{$harga->id}}/update" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}

          <div class="form-group">
                <label for="exampleFormControlSelect1">Status Group</label>
                <select name="nama_status" class="form-control" id="exampleFormControlSelect1">
                <option value="">-Pilih-</option>
                @foreach ($status as $item)
                <option value="{{ $item->nama_status}}"> {{$item->nama_status}}</option>
                @endforeach
                </select>
            </div>

          <div class="form-group">
            <label for="exampleInputNama">Nama Tipe</label>
            <input name="nama type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"
              value="{{$harga->nama}}">
          </div>

                    
                        <div class="form-group">
                        <label for="exampleInputNama">Deskripsi</label>
                        <input name="deskripsi"  type="text" class="form-control" id="exampleInputDeskripsi" aria-describedby="deskripsiHelp"
                        value="{{$harga->deskripsi}}">
                        </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">Group Pelanggan</label>
                <select name="group_id" class="form-control" id="exampleFormControlSelect1">
                <option value="">-Pilih-</option>
                @foreach ($data_group as $item)
                <option value="{{ $item->id}}"> {{$item->nama_group}}</option>
                @endforeach
                </select>
            </div>

                            
            <div class="form-group">
                <label for="exampleFormControlSelect1">Atur Produk</label>
                <select name="produk_id" class="form-control" id="exampleFormControlSelect1">
                <option value="">-Pilih-</option>
                @foreach ($produk as $item)
                <option value="{{ $item->id}}"> {{$item->nama_produk}}</option>
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