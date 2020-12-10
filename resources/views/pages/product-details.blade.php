@extends('layouts/master')

@section('content')

    <div class="test">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                </div>
            </div>
        </div>
    </div>
    <div class="ps-product--detail pt-60">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-lg-offset-1">
                    <div class="ps-product__thumbnail">
                        <div class="ps-product__preview">
                            <div class="ps-product__variants">
                                <div class="item">
                                    <img src="{{asset($product->img_1)}}" alt="">
                                </div>
                                @if($product->img_2)
                                    <div class="item"><img src="{{asset($product->img_2)}}" alt=""></div>
                                @endif
                                @if($product->img_3)
                                    <div class="item"><img src="{{asset($product->img_3)}}" alt=""></div>
                                @endif
                                @if($product->video_link)
                                    <a class="popup-youtube ps-product__video" href="{{url($product->video_link)}}">
                                        <img src="{{asset($product->img_1)}}" alt="">
                                        <i class="fa fa-play"></i>
                                    </a>
                                @endif
                            </div>

                        </div>
                        <div class="ps-product__image">
                            <div class="item">
                                <img class="zoom" src="{{asset($product->img_1)}}" alt="" data-zoom-image="{{asset($product->img_1)}}">
                            </div>
                            @if($product->img_2)
                                <div class="item">
                                    <img class="zoom" src="{{url($product->img_2)}}" alt="" data-zoom-image="{{asset($product->img_2)}}">
                                </div>
                            @endif
                            @if($product->img_3)
                                <div class="item">
                                    <img class="zoom" src="{{asset($product->img_3)}}" alt="" data-zoom-image="{{asset($product->img_3)}}">
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="ps-product__thumbnail--mobile">
                        <div class="ps-product__main-img"><img src="{{asset($product->img_1)}}" alt=""></div>
                        <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on">
                            <img src="{{asset($product->img_1)}}" alt="">
                            @if($product->img_2)
                                <img src="{{asset($product->img_2)}}" alt="">
                            @endif
                            @if($product->img_3)
                                <img src="{{asset($product->img_3)}}" alt="">
                            @endif
                            @if($product->video_link)
                                <a class="popup-youtube ps-product__video" href="{{url($product->video_link)}}">
                                    <img src="{{asset($product->img_1)}}" alt="">
                                    <i class="fa fa-play"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="ps-product__info">
                        <div class="ps-product__rating">
                            @for( $i=1;$i<=5;$i++)
                                @if($i <= $rating)
                                    <span class="fa fa-star productRating" style="color: #f97d00;font-size: 20px "></span>
                                @else
                                    <span class="fa fa-star productRating" style="font-size: 20px;color: #9d9d9d"></span>
                                @endif
                            @endfor
                            <label>{{" (".number_format($rating,2) . "  / 5)"}}</label>
                        </div>
                        <h1>{{$product->product_name}}</h1>
                        @if($product->discount_price)
                            <h3 class="ps-product__price"><del>{{$product->selling_price}} BDT </del> {{$product->discount_price}} BDT</h3>
                        @else
                            <h3 class="ps-product__price">{{$product->selling_price}} BDT</h3>
                        @endif
                        <div class="ps-product__block ps-product__quickview">
                            <h4>QUICK REVIEW</h4>
                            <p>Category : {{$product->category->category_name}}</p>
                            <p>Brand : {{$product->brand->brand_name}}</p>
                            <p>Skin Type : {{$product->skintype->type_of_skin}}</p>
                            <p>Skin Concern : {{$product->skinconcern->skin_concern}}</p>
                        </div>
                        <form action="{{url('add/to/cart')}}" method="post">
                            @csrf
                        <div class="ps-product__block ps-product__size">
                            <h4>QUENTITY</h4>
                            <div class="form-group">
                                <input class="form-control" type="number" value="1" min="1" max="100" name="qty">
                                <input type="hidden" value="{{$product->id}}}" name="id">
                            </div>
                        </div>
                        <div class="ps-product__shopping">
                            <button class="ps-btn mb-10" type="submit">Add to cart<i class="ps-icon-next"></i></button>
                            <div class="ps-product__actions"><a class="mr-10 addwishlist" data-id="{{$product->id}}"><i class="ps-icon-heart"></i></a></div>
                        </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <div class="ps-product__content mt-50">
                        <ul class="tab-list" role="tablist">
                            <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a></li>
                            <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">HOW TO USE</a></li>
                            <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">PRODUCT INGREDIENT</a></li>
                            <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">Review</a></li>
                        </ul>
                    </div>
                    <div class="tab-content mb-60">
                        <div class="tab-pane active" role="tabpanel" id="tab_01">
                            {!!$product->product_details!!}
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab_03">
                            {!!$product->product_ingredient!!}
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab_02">
                            {!!$product->how_to_use!!}
                        </div>

                        <div class="tab-pane" role="tabpanel" id="tab_04">
                            <p class="mb-20">{{$totalReview}} review for <strong>{{$product->product_name}}</strong></p>
                           @foreach($comments as $row)
                            <div class="ps-review">
                                @if($row->user->avatar)
                                <div class="ps-review__thumbnail"><img src="{{asset($row->user->avatar)}}" alt=""></div>
                                @else
                                    <div class="ps-review__thumbnail"><img src="{{ asset('public/media/user/profile.jpg') }}" alt=""></div>
                                @endif
                                    <div class="ps-review__content">
                                    <header>
                                        @for( $i=1;$i<=5;$i++)
                                            @if($i<=$row->rating)
                                                <span class="fa fa-star productRating" style="color: #f97d00;font-size: 15px "></span>
                                            @else
                                                <span class="fa fa-star " style="font-size: 15px;color: #9d9d9d"></span>
                                            @endif
                                        @endfor
                                        <p>By <span style="color: #2ac37d;font-weight: bold">{{$row->user->name}}</span>  - {{\Carbon\Carbon::parse($row->updated_at)->isoFormat('MMMM D, YYYY')}}</p>
                                    </header>
                                    <p>{{$row->comment}}</p>
                                        @php
                                          $images = DB::table('review_images')->where('review_id',$row->id)->get()
                                        @endphp
                                        @if($images)
                                            @foreach($images as $row)
                                                <a target="_blank" href="{{asset($row->image)}}">
                                                    <img src="{{asset($row->image)}}" style="height: 100px;width: 100px">
                                                </a>

                                            @endforeach
                                        @endif
                                </div>
                            </div>
                            @endforeach
                            {{ $comments->links() }}
                            @isset($order)
                                @if(!$userComment)
                            <form class="ps-product__review" action="{{url('product/comment/add')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h4>ADD YOUR REVIEW</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                        <div class="form-group">
                                            <label>Your rating<span></span></label>
                                            <select class="ps-rating" name="rating" >
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3" selected>3</option>
                                                <option value="4">4</option>
                                                <option value="5" >5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                                        <div class="form-group">
                                            <label>Your Review:</label>
                                            <textarea class="form-control" rows="6" name="review"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Your Review:</label>
                                           <input type="file" multiple accept="image/*" name="reviewImage[]">
                                        </div>
                                        <input type="hidden" name="product" value="{{$product->id}}">
                                        <div class="form-group">
                                            <button class="ps-btn ps-btn--sm">Submit<i class="ps-icon-next"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                    @endif
                                @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                        <h3 class="ps-section__title" data-mask="Related item">- YOU MIGHT ALSO LIKE</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="ps-section__content">
                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                    @foreach($skintypeProduct as $row)
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <!--
                                     <div class="ps-badge">
                                         <span>New</span>
                                     </div>
                                     -->
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
                                        <a href="#" class="btn btn-primary btn-sm">Add to Cart</a>
                                        <button class="btn btn-success btn-sm compare" >Compare</button>
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
                                    <p class="ps-shoe__categories"><a href="#">{{$row->category->category_name}}</a>,<a href="#"> {{$row->brand->brand_name}}</a>,<a href="#"> {{$row->skinconcern->skin_concern}}</a>,<a href="#"> {{$row->skintype->type_of_skin}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
