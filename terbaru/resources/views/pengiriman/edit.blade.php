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
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-12 mt-3">
                                <!-- <form action="{{ route('invoice.update', ['id' => $invoice->id]) }}" method="post"> -->
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
                                     
                                        <tr>
                                            
                                                <form action="" method="post">
                                                   
                                                    <input type="hidden" name="_method" value="DELETE" class="form-control">
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                     
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="hidden" name="_method" value="PUT" class="form-control">
                                                <select name="product_id" class="form-control">
                                                    <option value="">Select Product</option>
                                                    <option value=""></option>
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