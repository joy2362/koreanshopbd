<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <title>Korean Shop</title>
    <!-- vendor css -->
    <link href="{{ asset('public/backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/backend/css/starlight.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('public/backend/css/starlight.css')}}">
    <link href="{{ asset('public/backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">
</head>

<body>
@guest

@else
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="{{url("admin/home")}}"><i class="icon ion-android-star-outline"></i> KoeranShopBd</a></div>
    <div class="sl-sideleft">
        <div class="sl-sideleft-menu pt-4">
            <a href="{{url('admin/home')}}" class="sl-menu-link {{ (request()->is('admin/home*')) ? 'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="#" class="sl-menu-link {{ ( request()->is('admin/skinconcern*') || request()->is('admin/skintype*')  || request()->is('admin/categor*')  || request()->is('admin/brand*') ) ? 'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label ">Category</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route("categories")}}" class="nav-link">Category</a></li>
                <li class="nav-item"><a href="{{route("skintype")}}" class="nav-link">Skin Type</a></li>
                <li class="nav-item"><a href="{{route("skinconcern")}}" class="nav-link">Skin Concern</a></li>
                <li class="nav-item"><a href="{{route("brands")}}" class="nav-link">Brand</a></li>
            </ul>
            <a href="{{route("coupons")}}" class="sl-menu-link {{ (request()->is('admin/coupon*')) ? 'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">Coupon</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="#" class="sl-menu-link {{ (request()->is('admin/product*')) ? 'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                    <span class="menu-item-label">Product</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('add.product')}}" class="nav-link">Add Product</a></li>
                <li class="nav-item"><a href="{{route('view.product')}}" class="nav-link">All Product</a></li>
            </ul>
            <a href="#" class="sl-menu-link {{ (request()->is('admin/order*')) ? 'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                    <span class="menu-item-label">Order</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('add.product')}}" class="nav-link">Add Order</a></li>
                <li class="nav-item"><a href="{{route('today-order')}}" class="nav-link">Today's order</a></li>
                <li class="nav-item"><a href="{{route('month-order')}}" class="nav-link">This month order</a></li>
                <li class="nav-item"><a href="{{route('cancel-order')}}" class="nav-link">Canceled order</a></li>
                <li class="nav-item"><a href="{{route('return-order')}}" class="nav-link">Return request</a></li>
                <li class="nav-item"><a href="{{route('accept-return')}}" class="nav-link">Return Order</a></li>
                <li class="nav-item"><a href="{{url('admin/order/all')}}" class="nav-link">All Order</a></li>
            </ul>

            <a href="#" class="sl-menu-link {{ (request()->is('admin/post*')) ? 'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-book-outline tx-24"></i>
                    <span class="menu-item-label">Blog</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('post.category')}}" class="nav-link">Post Category</a></li>
                <li class="nav-item"><a href="{{route('add.post')}}" class="nav-link">Add Post</a></li>
                <li class="nav-item"><a href="{{route('view.post')}}" class="nav-link">All Post</a></li>
            </ul>
            <a href="#" class="sl-menu-link  {{ (request()->is('admin/siteinfo*')) ? 'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-settings tx-22"></i>
                    <span class="menu-item-label">Site info</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('siteSetting')}}" class="nav-link">General</a></li>
                <li class="nav-item"><a href="{{route('mainslider')}}" class="nav-link">Main Slider</a></li>
                <li class="nav-item"><a href="{{route('database.backup')}}" class="nav-link">Database Backup</a></li>
            </ul>
            <a href="#" class="sl-menu-link  {{ (request()->is('admin/newsletter*')) ? 'active' : '' }}">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
                    <span class="menu-item-label">Others</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route("admin.newsletter")}}" class="nav-link">Newsletters</a></li>
            </ul>


        </div><!-- sl-sideleft-menu -->
        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">{{auth()->user()->name}}</span>
                        <img src="{{asset(auth()->user()->avatar)}}" class=" rounded-circle" alt="" height="35" width="35">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="#"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                            <li><a href="{{route('admin.password.change')}}"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                            <li><a href="{{route('admin.logout')}}"><i class="icon ion-power"></i> Log Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>

        </div><!-- sl-header-right -->
    </div><!-- sl-header -->


@endguest

@yield('admin_content')

<script src="{{ asset('public/backend/lib/jquery/jquery.js') }}"></script>
<script src="{{ asset('public/backend/lib/popper.js/popper.js') }}"></script>
<script src="{{ asset('public/backend/lib/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
<script src="{{ asset('public/backend/lib/highlightjs/highlight.pack.js') }}"></script>
<script src="{{ asset('public/backend/lib/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('public/backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
<script src="{{ asset('public/backend/lib/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('public/backend/lib/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('public/backend/js/starlight.js') }}"></script>
<script src="{{ asset('public/backend/lib/medium-editor/medium-editor.js') }}"></script>
<script src="{{ asset('public/backend/js/shiftMultiSelect.js') }}"></script>
<script>
    $(function(){
        'use strict';
        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>
<script>
    $(function(){
        'use strict';
        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote1').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>
<script>
    $(function(){
        'use strict';
        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote2').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>
<script>
    $(function(){
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>

<script src="{{ asset('public/backend/lib/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{ asset('public/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('public/backend/lib/d3/d3.js')}}"></script>
<script src="{{ asset('public/backend/lib/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{ asset('public/backend/lib/chart.js/Chart.js')}}"></script>
<script src="{{ asset('public/backend/lib/Flot/jquery.flot.js')}}"></script>
<script src="{{ asset('public/backend/lib/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('public/backend/lib/Flot/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('public/backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>
<script src="{{ asset('public/backend/js/ResizeSensor.js')}}"></script>
<script src="{{ asset('public/backend/js/dashboard.js')}}"></script>
<script src="{{asset('public/backend/js/toastr.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this!!",
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

</body>
</html>
