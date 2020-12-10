@php
    $siteinfo=App\SiteDetails::where('id',1)->get();
    $coupon = App\Coupon::where('status','1')->orderby('id','desc')->get();
@endphp

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf" value="{{ csrf_token() }}">
    <link href="{{asset($siteinfo[0]->logo)}}" rel="apple-touch-icon">
    <link href="{{asset($siteinfo[0]->logo)}}" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>{{$siteinfo[0]->site_name}}</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/ps-icon/style.css')}}">
    <!-- CSS Library-->
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/Magnific-Popup/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/revolution/css/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Custom-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
<body class="ps-loading">
<div class="header--sidebar"></div>
<header class="header">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                    <p>{{$siteinfo[0]->address}}  -  Hotline: +880-{{$siteinfo[0]->phone_1}} @if($siteinfo[0]->phone_2) - +880-{{$siteinfo[0]->phone_2}} @endif</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="header__actions">
                        <a href="{{url('order/tracking')}}">Order Status</a>
                        @guest
                            <a href="{{url('login')}}">Login</a>
                            <a href="{{route('register')}}" >Regiser</a>
                        @else

                            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{auth()->user()->name}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('profile')}}">Profile</a></li>
                                    <li><a href="{{route('profile.setting')}}">Setting</a></li>
                                    <li><a href="{{ url('wishlist') }}">Whishlist</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('user.logout') }}">
                                            {{ __('Logout') }}
                                        </a>

                                    </li>
                                </ul>
                            </div>

                        @endguest
                        <a href="{{ url('compare') }}">Compare</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    <nav class="navigation">
        <div class="container-fluid">
            <div class="navigation__column left">
                <div class="header__logo"><a class="ps-logo" href="{{url("/")}}"><img src="{{asset($siteinfo[0]->logo)}}" alt=""></a></div>
            </div>
            <div class="navigation__column center">
                <ul class="main-menu menu">
                    <li class="menu-item"><a href="{{url('/')}}">Home</a></li>

                    <li class="menu-item"><a href="{{url('all/product')}}">All Products</a></li>
                    <li class="menu-item"><a href="{{url('/blog')}}">News</a></li>
                    <li class="menu-item"><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="navigation__column right">
                <form class="ps-search--header" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="Search Product…">
                    <button><i class="ps-icon-search"></i></button>
                </form>
                <div class="ps-cart">
                    <a class="ps-cart__toggle" href="{{url('/cart')}}">
                        <i class="ps-icon-shopping-cart"></i>
                    </a>
                </div>
                <div class="menu-toggle"><span></span></div>
            </div>
        </div>
    </nav>
</header>

@if(!$coupon)
    <div class="header-services">
            <div class="ps-services owl-slider" data-owl-auto="true" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-mousedrag="on" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-loop="true" data-owl-item="1" data-owl-dots="false" data-owl-speed="7000" data-owl-nav="true"   data-owl-gap="0">
            @foreach($coupon as $row)
                <p class="ps-service"><strong>Coupon</strong>: Use {{$row->code}} And Get {{$row->discount}}% Off</p>
            @endforeach
        </div>
    </div>
@endif
<main class="ps-main">
    @yield('content')
    <div class="ps-subscribe mt-20">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                    <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                    <form class="ps-subscribe__form" action="{{route('store.newsletter')}}" method="post">
                        @csrf
                        <input class="form-control" type="text" placeholder="Email" name="email">
                        <button>subscribe</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                    <p>...and receive a 5% discount coupon.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-footer">
        <div class="ps-footer__content">
            <div class="ps-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
                        <aside class="ps-widget--footer ps-widget--info">
                            <header>
                                <a class="ps-logo" href="{{url('/')}}"><img src="{{asset($siteinfo[0]->logo)}}" alt=""></a>
                            </header>
                            <footer>
                                <p>{!! $siteinfo[0]->about!!} </p>
                            </footer>
                        </aside>
                    </div>
                    <div class="col-lg-4 col-md-2 col-sm-4 col-xs-12 ">
                        <aside class="ps-widget--footer ps-widget--link">
                            <header>
                                <h3 class="ps-widget__title">Address Office</h3>
                            </header>
                            <footer>
                                <ul class="ps-list--line">
                                    <p><strong>{{$siteinfo[0]->address}}</strong></p>
                                    <p>Email: <a href='mailto:{{$siteinfo[0]->email}}'>{{$siteinfo[0]->email}}</a></p>
                                    <p>Phone: +880 {{$siteinfo[0]->phone_1}} </p>
                                </ul>
                            </footer>
                        </aside>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                        <aside class="ps-widget--footer ps-widget--link">
                            <header>
                                <h3 class="ps-widget__title">Find Our store</h3>
                            </header>
                            <footer>
                                <ul class="ps-list--link">
                                    <li><a href="#">Coupon Code</a></li>
                                    <li><a href="#">SignUp For Email</a></li>
                                    <li><a href="#">Site Feedback</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </footer>
                        </aside>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                        <aside class="ps-widget--footer ps-widget--link">
                            <header>
                                <h3 class="ps-widget__title">Get Help</h3>
                            </header>
                            <footer>
                                <ul class="ps-list--line">
                                    <li> <a href="{{url('order/tracking')}}">Order Status</a></li>
                                    <li><a href="#">Shipping and Delivery</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Payment Options</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </footer>
                        </aside>
                    </div>

                    <!--
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                        <aside class="ps-widget--footer ps-widget--link">
                            <header>
                                <h3 class="ps-widget__title">Products</h3>
                            </header>
                            <footer>
                                <ul class="ps-list--line">
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Accessries</a></li>
                                    <li><a href="#">Football Boots</a></li>
                                </ul>
                            </footer>
                        </aside>
                    </div>
                -->
                </div>
            </div>
        </div>
        <div class="ps-footer__copyright">
            <div class="ps-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <p>&copy; <a href="{{url('/')}}">{{$siteinfo[0]->site_name}}</a>, Inc. All rights Resevered. Develop by <a href="#"> Abdullah Zahid</a></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <ul class="ps-social">
                            <li><a href="{{url($siteinfo[0]->facebook_link)}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href='mailto:{{$siteinfo[0]->email}}'><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="{{url($siteinfo[0]->instagram_link)}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- JS Library-->
<script type="text/javascript" src="{{asset('public/frontend/plugins/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/owl-carousel/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{asset('public/frontend/plugins/imagesloaded.pkgd.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/slick/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/elevatezoom/jquery.elevatezoom.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<!-- Custom scripts-->
<script type="text/javascript" src="{{asset('public/frontend/js/main.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script>
        @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }

    @endif
</script>
<script>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        toastr.error("{{ $error }}");
    @endforeach
    @endif
</script>
<script>
    $(document).on("click", "#return", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are you Want to Return?",
            text: "Once Return,You will got your money back!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                }
            });
    });
    $(document).on("click", "#cancle", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are you Want to Cancel?",
            text: "Once Cancel,This will be Permanently Cancel your order!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                }
            });
    });
</script>

<script>
    $('.addwishlist').on('click',function(){
        var id = $(this).data('id');
        if(id){
            $.ajax({
                url:"{{url('add/wishlist/')}}/"+id,
                type:'GET',
                datatype:'json',
                success:function (data) {
                    if ($.isEmptyObject(data.error)){
                        toastr.success( data.success );
                    }else{
                        toastr.error( data.error );
                    }
                },
            })
        }else{
            alert('danger');
        }
    })

    $('.addcart').on('click',function(){
        var id = $(this).data('id');
        if(id){
            $.ajax({
                url:"{{url('add/cart/')}}/"+id,
                type:'GET',
                datatype:'json',
                success:function (data) {
                    if ($.isEmptyObject(data.error)){
                        toastr.success( data.success );
                    }else{
                        toastr.error( data.error );
                    }
                },
            })
        }else{
            alert('danger');
        }
    })
    $('.addCompare').on('click',function(){
        var id = $(this).data('id');
        if(id){
            $.ajax({
                url:"{{url('add/compare/')}}/"+id,
                type:'GET',
                datatype:'json',
                success:function (data) {
                    if ($.isEmptyObject(data.error)){
                        toastr.success( data.success );
                    }else{
                        toastr.error( data.error );
                    }
                },
            })
        }else{
            alert('danger');
        }
    })
</script>
<script>
    $(document).ready(function(){
        $('#location').change(function(){
            let value = $(this).val();
            if (value){
                $.ajax({
                    url:"{{ url('shipingcost') }}/"+value,
                    method:"get",
                    success:function(data){
                        $("#shipingCharge").html(data.shiping + " BDT");
                        $("#total").html(data.totalPrice + " BDT");
                        $("#totalAmount").val(data.totalPrice);
                        console.log(data)
                    }
                });

            }

        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#rdo02').change(function(){
            Swal.fire({
                icon: 'error',
                title: 'Sorry...',
                text: 'Online Payment system currently not available!',
            })

        });
    });
</script>
</body>
</html>
