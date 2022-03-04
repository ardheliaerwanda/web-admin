@extends('template1')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center">Invoice</h1>
                                <!-- <div class="text-center">
                                    <img src="{{ asset('logo.png') }}" alt="" width="350px" height="150px">
                                </div> -->
                            </div>
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="30%">Customer</td>
                                        <td>:</td>
                                        <td>{{ $invoice->customer->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>:</td>
                                        <td>{{ $invoice->customer->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:</td>
                                        <td>{{ $invoice->customer->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ $invoice->customer->email }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-12 mt-3">
                                <form action="{{ route('invoice.update', ['id' => $invoice->id]) }}" method="post">
                                @csrf
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Product</td>
                                            <td>Qty</td>
                                            <td>Price</td>
                                            <td>Subtotal</td>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach ($invoice->detail as $detail)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $detail->product->title }}</td>
                                            <td>{{ $detail->qty }}</td>
                                            <td>Rp {{ number_format($detail->price) }}</td>
                                            <td>Rp {{ $detail->subtotal }}</td>
                                            <td>
                                                <form action="{{ route('invoice.delete_product', ['id' => $detail->id]) }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE" class="form-control">
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="hidden" name="_method" value="PUT" class="form-control">
                                                <select name="product_id" class="form-control">
                                                    <option value="">Select Product</option>
                                                    @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" min="1" value="1" name="qty" class="form-control" required>
                                            </td>
                                            <td colspan="3">
                                                <button class="btn btn-primary btn-sm">ADD</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                </form>
                            </div>
                            
                            <div class="col-md-4 offset-md-8">
                                <table class="table table-hover table-bordered">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>: Rp {{ number_format($invoice->total) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tax 10% </td>
                                        <td>: Rp {{ number_format($invoice->tax) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Price</td>
                                        <td>: Rp {{ number_format($invoice->total_price) }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('invoice.index') }}">
                                <button class="btn btn-primary btn-sm" style="width: 100px; height: 40px; font-size: 20px;"> Sumbit</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection