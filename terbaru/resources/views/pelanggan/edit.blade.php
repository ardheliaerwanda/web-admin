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
        <h3 class="panel-title">Edit Data Pelanggan</h3>
      </div>
      <div class="panel-body">
        <form action="/pelanggan/{{$data_pelanggan->id}}/update" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}

          <div class="form-group">
              <label for="exampleInputKodePelanggan">Kode Pelanggan</label>
              <input name="kode_pelanggan"  type="text" class="form-control" id="exampleInpuKode_Pelanggan" aria-describedby="kode_pelangganHelp"
              value="{{$data_pelanggan->kode_pelanggan}}">
            </div>

            <div class="form-group">
    <label for="exampleFormControlSelect1">Group Pelanggan</label>
    <select name="group_id" class="form-control" id="exampleFormControlSelect1">
    <option value="">-Pilih-</option>
      @foreach ($group as $item)
      <option value="{{ $item->id}}"> {{$item->nama_group}}</option>

      @endforeach
    </select>
  </div>

          <div class="form-group">
            <label for="exampleInputNama">Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"
              value="{{$data_pelanggan->nama}}">
          </div>

          <div class="form-group">
            <label for="exampleInputTanggal">Tanggal</label>
            <input name="tanggal" type="date" class="form-control" id="exampleInputTanggal" aria-describedby="tanggalHelp"
            value="{{$data_pelanggan->tanggal}}">
            <div>

            <div class="form-group">
            <label for="exampleInputNama">No. Telepon</label>
            <input name="no_tlp" type="text" class="form-control" id="exampleInputno_tlp" aria-describedby="no_tlpHelp"
              value="{{$data_pelanggan->no_tlp}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="{{$data_pelanggan->email}}">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
              <option value="P" @if($data_pelanggan->jenis_kelamin == 'P') selected @endif> Perempuan</option>
              <option value="L" @if($data_pelanggan->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Kota</label>
            <select name="kota_id" class="form-control" id="exampleFormControlSelect1">
            @foreach ($cities as $item)
      <option value="{{ $item->id}}"> {{$item->nama_kota}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="Alamat" class="form-control" id="exampleFormControlTextarea1"
              rows="3">{{$data_pelanggan->Alamat}}</textarea>
          </div>

          <button type="submit" class="btn btn-warning">Update</button>

        </form>
      </div>
    </div>
  </div>
</div>


@endsection