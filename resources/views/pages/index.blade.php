@extends('layouts/master')

@section('content')
    <div class="ps-banner">
        <div class="rev_slider fullscreenbanner" id="home-banner">
            <ul>
                @foreach($topslider as $row)
                    @if($loop->even)
                    <li class="ps-banner" data-index="rs-2972" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg" src="{{asset($row->background)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                        <div class="tp-caption ps-banner__title" id="layer339" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <p>{{$row->title}}</p>
                        </div>
                        <div class="tp-caption ps-banner__description" id="layer211" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <p>{{ $row->description }}</p>
                        </div><a class="tp-caption ps-btn" id="layer31" href="{{url('product-details/'.$row->id)}}" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">Purchase Now<i class="ps-icon-next"></i></a>
                    </li>
                    @else
                    <li class="ps-banner ps-banner--white" data-index="rs-100" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg" src="{{asset($row->background)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                        <div class="tp-caption ps-banner__title" id="layer339" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <p>{{$row->title}}</p>
                        </div>
                        <div class="tp-caption ps-banner__description" id="layer2-14" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                            <p>{{ $row->description }}</p>
                        </div><a class="tp-caption ps-btn" id="layer364" href="{{url('product-details/'.$row->id)}}" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">Purchase Now<i class="ps-icon-next"></i></a>
                    </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="ps-owl-root ps-section pt-80 pb-40">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 ">
                        <h3 class="ps-section__title" data-mask="Promotion">- Hot Deal</h3>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                    </div>
                </div>
            </div>

            <div class="ps-section__content">
                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                    @foreach($flash_sale as $row)
                        <div class="ps-shoes--carousel">
                            <div class="ps-shoe">
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
                                <div class="ps-shoe__content mt-3">
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
                                        <p class="ps-shoe__categories"> {{$row->skinconcern->skin_concern}}, {{$row->skintype->type_of_skin}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section ps-section--hotdeal-3 pt-80">
        <div class="ps-container">
            <div class="ps-section__header">
                <h3 class="ps-section__title" data-mask="Promotion">- Trend</h3>
            </div>
            <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        @foreach($trend as $row)
                            <div class="grid-item">
                                <div class="grid-item__content-wrapper">
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
                                                <p class="ps-shoe__categories"> {{$row->skinconcern->skin_concern}}, {{$row->skintype->type_of_skin}}</p>                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="ps-section--features-product ps-section masonry-root pt-40 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="ps-section__title" data-mask="features">- New Product</h3>
            </div>
            <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        @foreach($newproduct as $row)
                        <div class="grid-item">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail">
                                        <div class="ps-badge">
                                            <span>New</span>
                                        </div>
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
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-features pt-80 pb-80">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    <div class="ps-iconbox">
                        <div class="ps-iconbox__header"><i class="ps-icon-delivery"></i>
                            <h3>Free shipping</h3>
                            <p>ON ORDER OVER $199</p>
                        </div>
                        <div class="ps-iconbox__content">
                            <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    <div class="ps-iconbox">
                        <div class="ps-iconbox__header"><i class="ps-icon-money"></i>
                            <h3>100% MONEY BACK.</h3>
                            <p>WITHIN 30 DAYS AFTER DELIVERY.</p>
                        </div>
                        <div class="ps-iconbox__content">
                            <p>You may return most new, unopened items sold within 30 days of delivery for a full refund.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    <div class="ps-iconbox">
                        <div class="ps-iconbox__header"><i class="ps-icon-customer-service"></i>
                            <h3>SUPPORT 24/7.</h3>
                            <p>WE CAN HELP YOU ONLINE.</p>
                        </div>
                        <div class="ps-iconbox__content">
                            <p>We offer a 24/7 customer hotline so you’re never alone if you have a question.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ps-owl-root ps-section pt-80 pb-40">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 ">
                        <h3 class="ps-section__title" data-mask="BEST SALE">- Top Sales</h3>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                    </div>
                </div>
            </div>

            <div class="ps-section__content">
                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                    @foreach($topsale as $row)
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
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
                                    <div class="addtocart">
                                        <span class="ps-shoe__price">
                                            @if($row->discount_price)
                                                <del>{{$row->selling_price}} BDT</del>  {{$row->discount_price}} BDT
                                            @else
                                                {{$row->selling_price}} BDT
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{url('product-details/'.$row->id)}}">{{$row->product_name}}</a>
                                    <p class="ps-shoe__categories"> {{$row->skinconcern->skin_concern}}, {{$row->skintype->type_of_skin}}</p>                                   </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="ps-section ps-home-blog pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h2 class="ps-section__title" data-mask="News">- Our Story</h2>
                <div class="ps-section__action"><a class="ps-morelink text-uppercase" href={{url('/blog')}}>View all post<i class="fa fa-long-arrow-right"></i></a></div>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    @foreach($blog as $row)
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                            <div class="ps-post">
                                <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="{{url('/blog-details/'.$row->id)}}"></a><img src="{{asset($row->post_img)}}" alt="" height="200"></div>
                                <div class="ps-post__content"><a class="ps-post__title" href="{{url('/blog-details/'.$row->id)}}">{{$row->post_title}}</a>
                                    <p class="ps-post__meta"><span>By: {{$row->user->name}}</span> -<span class="ml-5">{{date_format($row->created_at,"M d,Y")}}</span></p>
                                    <p> {!!   Str::limit(strip_tags( $row->post_details , 100)) !!}</p>
                                    <a class="ps-morelink" href="{{url('/blog-details/'.$row->id)}}">Read more<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="ps-container">
        <div class="ps-section__header mb-50">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="Our Brands">- Brands</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-home-partner ">
        <div class="ps-container">
            <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="40" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="4" data-owl-item-md="5" data-owl-item-lg="6" data-owl-duration="1000" data-owl-mousedrag="on">
               @foreach($brands as $row)
                    <a href="#"><img src="{{url($row->brand_logo)}}" alt="" height="160" width="160"></a>

                @endforeach
            </div>
        </div>
    </div>
    <!--
    <div class="row">
        <div class="col-sm-6">
            <div class="ps-home-contact">
                <div class="ps-home-contact__form">
                    <header>
                        <h3>Contact Us</h3>
                        <p>Learn about our company profile, communityimpact, sustainable motivation, and more.</p>
                    </header>
                    <footer>
                        <form action="product-listing.html" method="post">
                            <div class="form-group">
                                <label>Name<span>*</span></label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Email<span>*</span></label>
                                <input class="form-control" type="email">
                            </div>
                            <div class="form-group">
                                <label>Your message<span>*</span></label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="ps-btn">Send Message<i class="fa fa-angle-right"></i></button>
                            </div>
                        </form>
                    </footer>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-70 mb-10">
            <div class="ps-home-contact">
                <div id="map"  style="height: 600px;width: 100%;"></div>
            </div>
        </div>
    </div>


    <script>
        function initMap() {
            let options={
                zoom:8,
                center:{lat: 23.6850,lng:90.3563}
            }
            let Map = new google.maps.Map(document.getElementById('map'),options);
            let marker =new google.maps.Marker({
                position:{lat: 23.8103,lng:90.4125},
                map: Map,
                icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV-9BEkToLm5WgSHp20vRFusyqSvJzbQc&callback=initMap&region=bd" ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" ></script>
    -->
@endsection
