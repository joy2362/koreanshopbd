@extends('layouts/master')

@section('content')
    <div class="ps-checkout pt-80 pb-80">
        <div class="ps-container">
            <form class="ps-checkout__form" action="{{ url('new/order') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                        <div class="ps-checkout__billing">
                            <h3>Shipping Detail</h3>
                            <div class="form-group form-group--inline">
                                <label>Full Name<span>*</span>
                                </label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Email Address<span>*</span>
                                </label>
                                <input class="form-control" type="email" name="email">
                            </div>

                            <div class="form-group form-group--inline">
                                <label>Phone<span>*</span>
                                </label>
                                <input class="form-control" type="text" name="phone">
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Location<span>*</span></label>
                                <select class="form-control " name="location" id="location">
                                    <option selected value="1">Inside Dhaka</option>
                                    <option  value="2">Outside Dhaka</option>
                                </select>
                            </div>

                            <div class="form-group form-group--inline">
                                <label>Address<span>*</span>
                                </label>
                                <input class="form-control" type="text" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="ps-checkout__order">
                            <header>
                                <h3>Your Order</h3>
                            </header>
                            <div class="content">
                                <table class="table ps-checkout__products">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase">Product</th>
                                        <th class="text-uppercase">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cart as $row)
                                    <tr>
                                        <td>{{$row->name}} x{{$row->qty}}</td>
                                        <td>{{$row->price }} BDT</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>Order Total	</td>
                                        <td> {{ cart::Subtotal() }} BDT</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping charge</td>
                                        <td id="shipingCharge">{{$shiping}} BDT</td>
                                    </tr>
                                    @if(Session::has('coupon'))

                                    <tr>
                                        <td>Coupon</td>
                                        <td> - {{Session::get('coupon')['discount']}} BDT</td>
                                    </tr>
                                        @endif
                                    <tr>
                                        <td>Total</td>
                                        <td id="total">{{$total }} BDT</td>
                                        <input type="hidden" name="amount" id="totalAmount" value="{{$total}}">
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <footer>
                                <h3>Payment Method</h3>
                                <div class="form-group cheque">
                                    <div class="ps-radio ps-radio--inline">
                                        <input class="form-control" type="radio" name="payment" id="rdo01" value="cod" checked>
                                        <label for="rdo01">Cash On Delivery</label>
                                    </div>
                                    <div class="ps-radio ps-radio--inline">
                                        <input class="form-control" type="radio" name="payment" id="rdo02" value="online">
                                        <label for="rdo02">Online Payment</label>
                                    </div>
                                </div>
                                <div class="form-group paypal">
                                    <button class="ps-btn ps-btn--fullwidth">Place Order<i class="ps-icon-next"></i></button>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
