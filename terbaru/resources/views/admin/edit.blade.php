@extends('template')

@section('content')
<div class="row">
  <div class="col-md-12">

    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Edit Data Admin</h3>
      </div>
      <div class="panel-body">
        <form action="/adminn/{{$admin->id}}/update" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputNama">Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"
              value="{{$admin->nama}}">
          </div>
          <div class="form-group">
            <label for="exampleInputNama">No. Telepon</label>
            <input name="no_tlp" type="text" class="form-control" id="exampleInputno_tlp" aria-describedby="no_tlpHelp"
              value="{{$admin->no_tlp}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="{{$admin->email}}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
              <option value="P" @if($admin->jenis_kelamin == 'P') selected @endif> Perempuan</option>
              <option value="L" @if($admin->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="Alamat" class="form-control" id="exampleFormControlTextarea1"
              rows="3">{{$admin->Alamat}}</textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Hak Akses</label>
            <select name="role" class="form-control" id="exampleFormControlSelect1">
              @foreach ($roles as $role)
              <option value="{{ $role->id }}" {{ $role->id == $admin->user->role_id ? 'selected' : '' }}>
                {{ $role->nama_role }}
              </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
          </div>

          <button type="submit" class="btn btn-warning">Update</button>

        </form>
      </div>
    </div>
  </div>
</div>


@endsection

@section('content1')

<div class="container">
  <h2>Edit Data Admin</h2>
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{session('sukses')}}
  </div>
  @endif
  <div class="row">
    <div class="col-lg-12">
      <form action="/adminn/{{$admin->id}}/update" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="exampleInputNama">Nama</label>
          <input name="name" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp"
            value="{{$admin->name}}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
            <option value="P" @if($admin->jenis_kelamin == 'P') selected @endif> Perempuan</option>
            <option value="L" @if($admin->jenis_kelamin == 'L') selected @endif> Laki-Laki</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Alamat</label>
          <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"
            rows="3">{{$admin->alamat}}</textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1"
            value="{{$admin->password}}">
        </div>

        <button type="submit" class="btn btn-warning">Update</button>

      </form>
    </div>
  </div>
</div>

@endsection