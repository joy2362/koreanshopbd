@extends('layouts/master')

@section('content')
    <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-cart-listing">
                <table class="table ps-cart__table">
                    <thead>
                    <tr>
                        <th>All Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $row)
                    <tr>
                        <td><a class="ps-product__preview" href="{{url('product-details/'.$row->id)}}"><img class="mr-15" src="{{$row->options->image}}" height="100" width="100" alt=""> {{$row->name}}</a></td>
                        <td>{{$row->price}} BDT</td>
                        <td>
                            <div class="form-group--number">
                                <form method="post" action="{{url('update/cart')}}">
                                @csrf
                                    <input class="form-control" type="number" value="{{$row->qty}}" min="1" max="100" name="qty">
                                    <input type="hidden" name="productid" value="{{ $row->rowId }}">
                                    <button type="submit" class="plus"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></button>
                                </form>
                            </div>
                        </td>
                        <td>{{ $row->price * $row->qty }} BDT</td>
                        <td>
                            <form method="post" action="{{url('remove/cart/item')}}">
                                @csrf
                                <input type="hidden" name="productid" value="{{ $row->rowId }}">
                                <button type="submit" class="ps-remove"></button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
                <div class="ps-cart__actions">

                    <div class="ps-cart__promotion">
                        <form method="post" action="{{url('coupon/apply')}}">
                            @csrf
                        <div class="form-group">
                            <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                                @if(Session::has('coupon'))
                                     <input class="form-control" type="text"  value="{{Session::get('coupon')['name']}}" name="coupon" readonly>
                                @else
                                    <input class="form-control" type="text" placeholder="Promo Code" name="coupon">
                                @endif
                            </div>
                        </div>

                        <div class="form-group mt-5">
                            @if(!Session::has('coupon'))
                                <button class="ps-btn ps-btn--gray" type="submit">Apply Coupon</button>
                            @else
                                <a class="ps-btn ps-btn--gray" href="{{url('coupon/remove')}}">Remove Coupon</a>
                            @endif
                        </div>

                        </form>
                    </div>

                    <div class="ps-cart__total">
                        @if(!Session::has('coupon'))
                        <h3>Total Price: <span> {{ cart::Subtotal() }} BDT</span></h3>
                        @else
                            <h3>Subtotal: <span> {{ cart::Subtotal() }} BDT</span></h3>
                            <h3>Coupon: <span> - {{ Session::get('coupon')['discount'] }} BDT</span></h3>
                            <h3>Total : <span> {{ Session::get('coupon')['balance'] }} BDT</span></h3>
                        @endif
                        <a class="ps-btn" href="{{url('checkout')}}">Process to checkout<i class="ps-icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
