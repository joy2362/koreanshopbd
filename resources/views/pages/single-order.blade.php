@extends('layouts/master')

@section('content')
    <div class="container pt-80 pb-80">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2 class="card-header text-center mb-30">
                    {{ __('Order Summary') }}
                </h2>
                <div class="jumbotron">
                    <ul>
                        <li class="mb-10">Order Id:  {{ $details->order_Id }}</li>
                        <li class="mb-10">Name:  {{ $details->name }}</li>
                        <li class="mb-10">Address:  {{ $details->address }}</li>
                        <li class="mb-10">Order Date:  {{ \Carbon\Carbon::parse($details->created_at)->format('d-m-Y') }}</li>
                        <li class="mb-10">Total: {{ $details->amount }} BDT</li>
                        <li class="mb-10">Status:   @if($details->status == "1")
                                <span class="label label-primary">processing</span>
                            @elseif($details->status == '2')
                                <span class="label label-primary">Picked</span>
                            @elseif($details->status == '3')
                                <span class="label  label-danger">Delevered </span>
                            @elseif($details->status == '4')
                                <span class="label label-danger">Cancel </span>
                            @elseif($details->status == '5')
                                <span class="label label-danger">Return Request Process </span>
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="ps-cart-listing">
                    <table class="table ps-cart__table">
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Rate</th>
                            <th>Qty</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $row)
                                <tr>
                                    <td>{{$row->product->product_name}}</td>
                                    <td>{{$row->unit_price}}</td>
                                    <td>{{$row->quantity}}</td>
                                    <td>{{$row->total_price}}</td>

                                </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr >
                                <td colspan="4" >
                                    @if($details->status == "1")
                                    <a href="{{url('cancel/order/'.$details->id)}}" class="btn btn-danger " id="cancle">Cancel order</a>
                                    @endif
                                    @if($details->status == "3")
                                    <a href="{{url('return/order/'.$details->id)}}" class="btn btn-danger " id="return">Return order</a>
                                        @endif
                                </td>
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

