@extends('template')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pengiriman Baru</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('pengiriman.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Pesanan</label>
                                <select name="invoice_id" class="form-control" required>
                                    <option value hidden="">-- Select --</option>
                                    @foreach ($invoices as $invoice) 
                                    <option value="{{ $invoice->id }}">{{ $invoice->id }} - {{ $invoice->customer->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection