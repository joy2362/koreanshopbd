@extends('layouts/master')

@section('content')

    <div class="ps-products-wrap pt-80 pb-80">
        <div class="ps-products" data-mh="product-listing">
            <div class="ps-product-action">
                <div class="ps-product__filter">
                    <select class="ps-select selectpicker" >
                        <option >Shortby</option>
                        <option value="1">Name</option>
                        <option value="3">Price (Low to High)</option>
                        <option value="3">Price (High to Low)</option>
                    </select>
                </div>
            </div>

            <div class="ps-product__columns">
                @foreach($products as $row)
                <div class="ps-product__column">

                    <div class="ps-shoe mb-30">
                        <div class="ps-shoe__thumbnail">
                            @if($row->discount_price)
                                @php
                                    $amount = $row->selling_price - $row->discount_price;
                                    $percentage=($amount/$row->selling_price )*100;
                                @endphp
                                <div class="ps-badge ps-badge--sale ps-badge--2nd">
                                    <span>{{ceil($percentage)}} %</span>
                                </div>
                            @endif
                            <button class="ps-shoe__favorite addwishlist"  data-id="{{$row->id}}"><i class="ps-icon-heart"></i></button>
                            <img src="{{asset($row->img_1)}}" alt=""><a class="ps-shoe__overlay" href="{{url('product-details/'.$row->id)}}"></a>
                        </div>
                        <div class="ps-shoe__content">
                            <div class="ps-shoe__variants text-center">
                                <div class="addtocart ">
                                    <button class="btn btn-primary btn-sm addcart" data-id="{{$row->id}}">Add to Cart</button>
                                    <button class="btn btn-success btn-sm addCompare"  data-id="{{$row->id}}">Compare</button>
                                </div>
                                <div class="addtocart mb-5 ">
                                                <span class="ps-shoe__price">
                                                    @if($row->discount_price)
                                                        <del>{{$row->selling_price}} BDT</del>  {{$row->discount_price}} BDT
                                                    @else
                                                        {{$row->selling_price}} BDT
                                                    @endif
                                                </span>
                                </div>
                            </div>
                            <div class="ps-shoe__detail mt-1"><a class="ps-shoe__name" href="{{url('product-details/'.$row->id)}}">{{$row->product_name}}</a>
                                <p class="ps-shoe__categories"> {{$row->skinconcern->skin_concern}}, {{$row->skintype->type_of_skin}}</p>                                        </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            <div class="ps-product-action">
                   {{$products->links()}}
            </div>
        </div>
        <div class="ps-sidebar" data-mh="product-listing">
            <aside class="ps-widget--sidebar ps-widget--category">
                <div class="ps-widget__header">
                    <h3>Category</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--checked">
                        @foreach($category as $row)
                            @if(!empty($selectCategory ))
                                @if($selectCategory == $row->id)
                                    <li class="current"><a href="{{url('product/category/'.$row->id)}}">{{$row->category_name}}</a></li>
                                @else
                                    <li ><a href="{{url('product/category/'.$row->id)}}">{{$row->category_name}}</a></li>
                                @endif
                            @else
                                <li ><a href="{{url('product/category/'.$row->id)}}">{{$row->category_name}}</a></li>
                            @endif

                        @endforeach
                    </ul>
                </div>
            </aside>
            <!--
            <aside class="ps-widget--sidebar ps-widget--filter">
                <div class="ps-widget__header">
                    <h3>Price</h3>
                </div>
                <div class="ps-widget__content">
                    <div class="ac-slider" data-default-min="0" data-default-max="10000" data-max="10000" data-step="50" data-unit="BDT"></div>
                    <p class="ac-slider__meta">Price:<span class="ac-slider__value ac-slider__min"></span>-<span class="ac-slider__value ac-slider__max"></span></p>
                    <a class="ac-slider__filter ps-btn" href="#">Filter</a>
                </div>
            </aside>
            -->
            <aside class="ps-widget--sidebar ps-widget--category">
                <div class="ps-widget__header">
                    <h3>Brand</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--checked">

                        @foreach($brand as $row)
                            @if(!empty($selectBrand ))
                                @if($selectBrand == $row->id)
                        <li class="current"><a href="{{url('product/brand/'.$row->id)}}">{{$row->brand_name}}</a></li>
                                @else
                        <li><a href="{{url('product/brand/'.$row->id)}}">{{$row->brand_name}}</a></li>
                                @endif
                            @else
                        <li><a href="{{url('product/brand/'.$row->id)}}">{{$row->brand_name}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </aside>
            <aside class="ps-widget--sidebar ps-widget--category">
                <div class="ps-widget__header">
                    <h3>Skin Type</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--checked">
                        @foreach($skinType as $row)
                            @if(!empty($selectSkintype ))
                                @if($selectSkintype == $row->id)
                                     <li class="current"><a href="{{url('product/skintype/'.$row->id)}}">{{$row->type_of_skin}}</a></li>
                                @else
                                <li><a href="{{url('product/skintype/'.$row->id)}}">{{$row->type_of_skin}}</a></li>
                                @endif
                            @else
                                 <li><a href="{{url('product/skintype/'.$row->id)}}">{{$row->type_of_skin}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </aside>
            <aside class="ps-widget--sidebar ps-widget--category">
                <div class="ps-widget__header">
                    <h3>Skin Concerns</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--checked">
                        @foreach($skinConcerns as $row)
                            @if(!empty($selectSkinconcernsFilter ))
                                @if($selectSkinconcernsFilter == $row->id)
                            <li class="current"><a href="{{url('product/skinconcerns/'.$row->id)}}">{{$row->skin_concern}}</a></li>
                                @else
                            <li><a href="{{url('product/skinconcerns/'.$row->id)}}">{{$row->skin_concern}}</a></li>
                                @endif
                            @else
                            <li><a href="{{url('product/skinconcerns/'.$row->id)}}">{{$row->skin_concern}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </aside>
            </div>
        </div>
    </div>
@endsection
