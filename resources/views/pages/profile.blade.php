@extends('layouts/master')

@section('content')
    <div class="container pt-80 pb-80">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="ps-cart-listing">
                    <table class="table ps-cart__table">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Amount</th>
                                <th>Order Date</th>
                                <th>Est. date of delivery</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $row)
                                <tr>
                                    <td>{{ $row->order_Id }}</td>
                                    <td>{{ $row->amount }} BDT</td>
                                    <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }}</td>
                                    @if($row->status == '1' || $row->status == '2')
                                    <td>{{\Carbon\Carbon::parse($row->created_at)->addDays(3)->format('d-m-Y') }}</td>
                                    @elseif($row->status =='3')
                                        <td>{{ \Carbon\Carbon::parse($row->delivery_date)->format('d-m-Y') }}</td>
                                    @else
                                    <td>-</td>
                                    @endif
                                        <td>
                                        @if($row->status == "1")
                                            <span class="label label-warning">processing</span>
                                        @elseif($row->status == '2')
                                            <span class="label label-info">Picked</span>
                                        @elseif($row->status == '3')
                                            <span class="label label-success">Delevered </span>
                                        @elseif($row->status == '4')
                                            <span class="label label-danger">Cancel </span>
                                            @elseif($row->status == '5')
                                                <span class="label label-danger">Return Request Process </span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('order/'.$row->order_Id)}}" class="btn btn-sm btn-info">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $order->links() }}
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="card" >
                    @if(Auth::user()->avatar)
                        <img src="{{ asset(Auth::user()->avatar) }}" class="card-img-top " style="height: 90px; width: 90px; margin-left: 34%;" >
                    @else
                        <img src="{{ asset('public/media/user/profile.jpg') }}" class="card-img-top" style="height: 90px; width: 90px; margin-left: 34%;" >
                    @endif
                    <div class="card-body mt-30">
                        <h4 class="card-title">{{ Auth::user()->name }}</h4>
                        <ul class="list-group ">
                            <li class="mt-10">{{auth()->user()->email}}</li>
                            <li class="mt-10">{{auth()->user()->phone}}</li>
                        </ul>
                        <a class="btn btn-sm btn-danger" href="{{ route('user.logout') }}">
                            {{ __('Logout') }}
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

