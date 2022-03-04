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

  <!--button -->
  <div class="content-header clearfix">
<ol class="breadcrumb">
@if($loggedIn->role_id == 1)
<li><a href="/pelanggan">Pelanggan</a></li><!-- react-text: 754 --> <!-- /react-text -->
<li><span class="current">Daftar Group</span></li>
@endif
</ol>
<div class="content-header-action pull-right">

<button type="button" class="btn btn-primary" style="cursor:pointer" data-toggle="modal" data-target="#exampleModal">
<span><i class="fa fa-plus"></i>Tambah Group</span>
</button>



</div>
</div>

          <div class="panel">
          <div class="panel-heading">
          <h2 class="panel-title">Daftar Group</h2>
          </div>

								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                        <th>Urutan</th>
                        <th>Nama Group</th>
                        <th>Deskripsi</th>
                        <th>Pelanggan Terdaftar</th>
                        <th>Status</th>
                      </tr>
										</thead>
										<tbody>
                    @foreach($data_group as $group)
                      <tr>
                        <td>{{$group->urutan}} </td>
                          <td>{{$group->nama_group}} </td>
                          <td>{{$group->deskripsi}} </td>
                          <td>{{$group->pelanggan_id}} </td>
                          <td>{{$group->nama_status}} </td>
                          <td>
                          @if($loggedIn->role_id == 1 || $loggedIn->role_id == 2)
                          <a href="/group/{{$group->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/group/{{$group->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
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
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form action="/group/create" method="POST">
            {{csrf_field()}}

            <div class="form-group">
              <label for="exampleInputNamaGroup">Nama Group</label>
              <input name="nama_group"  type="text" class="form-control" id="exampleInpuNama_Group" aria-describedby="nama_groupHelp">
            </div>


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
              <label for="exampleInputNama">Deskripsi Group</label>
              <input name="deskripsi"  type="text" class="form-control" id="exampleInputDeskripsi" aria-describedby="deskripsiHelp">
            </div>
            
            <div class="form-group">
            <label for="exampleInputUrutan">Urutan</label>
            <input name="urutan" type="test" class="form-control" id="exampleInputUrutan" aria-describedby="urutanHelp">
            </div>

            <div class="form-group">
    <label for="exampleFormControlSelect1">Pelanggan</label>
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
  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
             </div>

</form>
            
            </div>
         </div>
        </div>

@endsection