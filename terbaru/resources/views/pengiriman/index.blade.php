@extends('template')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <div class="row mt-2">
                            <div class="col-md-6 float-right">
                                <a href="{{ url('/pengiriman/new') }}" class="btn btn-primary btn-md float-right"><i class="fa fa-plus" style="font-size: 15px;"></i>&nbsp Tambah Pengiriman Penjualan</a>
                            </div>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success mt-2">
                                {!! session('success') !!}
                            </div>
                        @endif
                        <div class="card-table border-radius-top">
                            <div class="row mt-3 p-5">
                                <div class="col-md-6">
                                    <h3 class="card-title titlee">Daftar Pengiriman</h3>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                        <div class="card-table border-radius-bottom">
                    <div class="card-body p-5">
                            <table class="table table-hover table-bordered">
                                <thead class="table-head">
                                    <tr>
                                        <th>No Transaksi</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Status</th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                        <tr>
                                            <td><strong></strong></td>
                                            <td></td>
                                            <td></td>
                                            <td><span class="badge badge-success"> Item</span></td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="8" class="text-center">Empty Data</td>
                                        </tr>
                                </tbody>
                            </table>
                            <div class="float-right">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection