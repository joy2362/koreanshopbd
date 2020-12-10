@extends('layouts/master')

@section('content')

    <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-cart-listing ps-table--compare">
                <table class="table ps-cart__table">
                    <tbody>
                    <tr>
                        <td>Product</td>
                        <td><a class="ps-product__preview text-uppercase" href="{{url('product-details/'.$compare[0]->product->id)}}"><img class="mr-15" src="{{$compare[0]->product->img_1}}" alt="" height="100" width="100"> {{$compare[0]->product->product_name}}</a></td>
                       @if($total == 2)
                        <td><a class="ps-product__preview text-uppercase"  href="{{url('product-details/'.$compare[1]->product->id)}}"><img class="mr-15" src="{{$compare[1]->product->img_1}}" alt="" height="100" width="100"> {{$compare[1]->product->product_name}}</a></td>
                        @endif
                        @if($total == 3)
                            <td><a class="ps-product__preview text-uppercase"  href="{{url('product-details/'.$compare[2]->product->id)}}"><img class="mr-15" src="{{$compare[2]->product->img_1}}" alt="" height="100" width="100"> {{$compare[2]->product->product_name}}</a></td>
                        @endif
                        @if($total == 4)
                            <td><a class="ps-product__preview text-uppercase"  href="{{url('product-details/'.$compare[3]->product->id)}}"><img class="mr-15" src="{{$compare[3]->product->img_1}}" alt="" height="100" width="100"> {{$compare[3]->product->product_name}}</a></td>
                        @endif
                    </tr>
                    <tr>
                        <td>Pricing</td>
                        <td>
                            <span class="price">
                                @if($compare[0]->product->discount_price)
                                    <del>{{$compare[0]->product->selling_price}} BDT</del>  {{$compare[0]->product->discount_price}} BDT
                                @else
                                    {{$compare[0]->product->selling_price}} BDT
                                @endif
                            </span>
                        </td>
                        @if($total == 2)
                        <td>
                            <span class="price">
                                @if($compare[1]->product->discount_price)
                                    <del>{{$compare[1]->product->selling_price}} BDT</del>  {{$compare[1]->product->discount_price}} BDT
                                @else
                                    {{$compare[1]->product->selling_price}} BDT
                                @endif
                            </span>
                        </td>
                        @endif
                        @if($total == 3)
                            <td>
                            <span class="price">
                                @if($compare[2]->product->discount_price)
                                    <del>{{$compare[2]->product->selling_price}} BDT</del>  {{$compare[2]->product->discount_price}} BDT
                                @else
                                    {{$compare[2]->product->selling_price}} BDT
                                @endif
                            </span>
                            </td>
                        @endif
                        @if($total == 4)
                            <td>
                            <span class="price">
                                @if($compare[3]->product->discount_price)
                                    <del>{{$compare[3]->product->selling_price}} BDT</del>  {{$compare[3]->product->discount_price}} BDT
                                @else
                                    {{$compare[3]->product->selling_price}} BDT
                                @endif
                            </span>
                            </td>
                        @endif
                    </tr>

                    <tr>
                        <td>Brand</td>
                        <td>
                            {{ $compare[0]->product->brand->brand_name}}
                        </td>
                        @if($total == 2)
                            <td>
                                {{ $compare[1]->product->brand->brand_name}}
                            </td>
                        @endif
                        @if($total == 3)
                            <td>
                                {{ $compare[2]->product->brand->brand_name}}
                            </td>
                        @endif
                        @if($total == 4)
                            <td>
                                {{ $compare[3]->product->brand->brand_name}}
                            </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>
                            {{ $compare[0]->product->category->category_name}}
                        </td>
                        @if($total == 2)
                            <td>
                                {{ $compare[1]->product->category->category_name}}
                            </td>
                        @endif
                        @if($total == 3)
                            <td>
                                {{ $compare[2]->product->category->category_name}}
                            </td>
                        @endif
                        @if($total == 4)
                            <td>
                                {{ $compare[3]->product->category->category_name}}
                            </td>
                        @endif
                    </tr>

                    <tr>
                        <td>Available</td>
                        <td>
                            <span class="status in-stock">
                                @if($compare[0]->product->product_stock > 0)
                                In stock
                                @else
                                    Out of stock
                                @endif
                            </span>
                        </td>

                        @if($total == 2)
                            <td>
                                <span class="status in-stock">
                                @if($compare[1]->product->product_stock > 0)
                                        In stock
                                    @else
                                        Out of stock
                                    @endif
                            </span>
                            </td>
                        @endif
                        @if($total == 3)
                            <td>
                                <span class="status in-stock">
                                @if($compare[2]->product->product_stock > 0)
                                        In stock
                                    @else
                                        Out of stock
                                    @endif
                            </span>
                            </td>
                        @endif
                        @if($total == 4)
                            <td>
                                <span class="status in-stock">
                                @if($compare[3]->product->product_stock > 0)
                                        In stock
                                    @else
                                        Out of stock
                                    @endif
                            </span>
                            </td>
                        @endif
                    </tr>

                    <tr>
                        <td>Skin Type</td>
                        <td>{{$compare[0]->product->skintype->type_of_skin}}</td>
                        @if($total == 2)
                        <td>{{$compare[1]->product->skintype->type_of_skin}}</td>
                        @endif
                        @if($total == 3)
                            <td>{{$compare[2]->product->skintype->type_of_skin}}</td>
                        @endif
                        @if($total ==4)
                            <td>{{$compare[3]->product->skintype->type_of_skin}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td>Skin Concerns</td>
                        <td>{{$compare[0]->product->skinconcern->skin_concern}}</td>
                        @if($total == 2)
                            <td>{{$compare[1]->product->skinconcern->skin_concern}}</td>
                        @endif
                        @if($total == 3)
                            <td>{{$compare[2]->product->skinconcern->skin_concern}}</td>
                        @endif
                        @if($total == 4)
                            <td>{{$compare[3]->product->skinconcern->skin_concern}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td>Order</td>
                        <td>
                            <a class="ps-btn addcart" data-id="{{$compare[0]->product->id}}">Add to cart<i class="ps-icon-next"></i></a>
                            <a class="ps-product-favorite ml-10 addwishlist"  data-id="{{$compare[0]->product->id}}">
                                <i class="ps-icon-heart"></i>
                            </a>
                        </td>
                        @if($total == 2)
                        <td>
                            <a class="ps-btn addcart" data-id="{{$compare[1]->product->id}}">Add to cart<i class="ps-icon-next"></i></a>
                            <a class="ps-product-favorite ml-10 addwishlist"  data-id="{{$compare[1]->product->id}}">
                                <i class="ps-icon-heart"></i>
                            </a>
                        </td>
                        @endif
                        @if($total == 3)
                            <td>
                                <a class="ps-btn addcart" data-id="{{$compare[2]->product->id}}">Add to cart<i class="ps-icon-next"></i></a>
                                <a class="ps-product-favorite ml-10 addwishlist"  data-id="{{$compare[2]->product->id}}">
                                    <i class="ps-icon-heart"></i>
                                </a>
                            </td>
                        @endif
                        @if($total == 4)
                            <td>
                                <a class="ps-btn addcart" data-id="{{$compare[3]->product->id}}">Add to cart<i class="ps-icon-next"></i></a>
                                <a class="ps-product-favorite ml-10 addwishlist"  data-id="{{$compare[3]->product->id}}">
                                    <i class="ps-icon-heart"></i>
                                </a>
                            </td>
                        @endif
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
