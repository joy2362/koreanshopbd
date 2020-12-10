@extends('admin.admin_layouts')

@section('admin_content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <p class="mg-b-20 mg-sm-b-30">Order Details</p>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><strong>Order</strong> Details</div>

                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Name: </th>
                                        <th>{{ $order->name }}</th>
                                    </tr>
                                    <tr>
                                        <th>Phone: </th>
                                        <th>{{ $order->phone }}</th>
                                    </tr>
                                    <tr>
                                        <th>Email: </th>
                                        <th>{{ $order->email }}</th>
                                    </tr>
                                    <tr>
                                        <th>Address: </th>
                                        <th>{{ $order->address }}</th>
                                    </tr>
                                    <tr>
                                        <th>Order Id: </th>
                                        <th>{{ $order->order_Id }}</th>
                                    </tr>
                                    <tr>
                                        <th>Total :</th>
                                        <th>{{ $order->amount }} BDT</th>
                                    </tr>
                                    <tr>
                                        <th>Status: </th>
                                        <th>
                                            @if($order->status =='1')
                                                <span class="badge badge-primary">Processing</span>
                                            @elseif($order->status =="2")
                                                <span class="badge badge-info">Picked</span>
                                            @elseif($order->status =="3")
                                                <span class="badge badge-success">Delivered</span>
                                            @elseif($order->status =="4")
                                                <span class="badge badge-danger">Cancel</span>
                                            @elseif($order->status =="5")
                                                <span class="badge badge-danger">Return Request</span>
                                            @elseif($order->status =="6")
                                                <span class="badge badge-danger">Return Accept</span>
                                            @endif
                                                {{ $order->store_amount }}
                                        </th>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <h6 class="card-body-title">Product Details </h6>
                        <br>
                        <div class="table-wrapper">
                            <table  class="table display responsive nowrap">
                                <thead>
                                <tr>
                                    <th class="wd-15p">Product ID</th>
                                    <th class="wd-15p">Product Name</th>
                                    <th class="wd-15p">Image</th>
                                    <th class="wd-15p">Quantity</th>
                                    <th class="wd-15p">Unit Price</th>
                                    <th class="wd-20p">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $row)
                                    <tr>
                                        <td>{{ $row->product->product_code }}</td>
                                        <td>{{ $row->product->product_name }}</td>
                                        <td><img src="{{ URL::to($row->product->img_1) }}" height="50px;" width="50px;"></td>

                                        <td>
                                            {{ $row->quantity }}

                                        </td>
                                        <td>
                                            {{ $row->singleprice }} BDT

                                        </td>
                                        <td>
                                            {{ $row->totalprice }} BDT

                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- table-wrapper -->
                    </div><!-- card -->
                    </div>
                    @if($order->status == '1')
                        <a href="{{ url('admin/order/progress/'.$order->id) }}" class="btn btn-info">Picked</a>
                    @elseif($order->status == '2')
                        <a href="{{ url('admin/order/delivered/'.$order->id) }}" class="btn btn-info">Delevered</a>
                    @elseif($order->status == '3')
                        <strong class="text-success">This Order are successfully delivered</strong>
                    @else
                        <strong class="text-danger">This order are not valid its canceled</strong>
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection
