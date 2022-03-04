@extends('template')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <div class="row mt-2">
                            <div class="col-md-6 float-right">
                                <a href="{{ url('/invoice/new') }}" class="btn btn-primary btn-md float-right"><i class="fa fa-plus" style="font-size: 15px;"></i>&nbsp Invoice Baru</a>
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
                                    <h3 class="card-title titlee">Daftar Invoice</h3>
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
                                        <th>Invoice ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Total Item</th>
                                        <th>Subtotal</th>
                                        <th>Tax</th>
                                        <th>Total Price</th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($invoice as $row)
                                        <tr>
                                            <td><strong>#{{ $row->id }}</strong></td>
                                            <td>{{ $row->customer->name }}</td>
                                            <td>{{ $row->customer->phone }}</td>
                                            <td><span class="badge badge-success">{{ $row->detail->count() }} Item</span></td>
                                            <td>Rp {{ number_format($row->total) }}</td>
                                            <td>Rp {{ number_format($row->tax) }}</td>
                                            <td>Rp {{ number_format($row->total_price) }}</td>
                                            <td>
                                                <form action="{{ route('invoice.destroy', $row->id) }}" method="POST" class="text-center">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a href="{{ route('invoice.edit', $row->id) }}" class="btn btn-warning btn-sm">Update</a>
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                    <a href="{{ route('invoice.print', $row->id) }}" class="btn btn-secondary btn-sm">Print</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Empty Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="float-right">
                                {{ $invoice->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection