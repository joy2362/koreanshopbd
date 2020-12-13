@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Admin</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">Edit Permission
                    <a href="{{route('admin-access')}}" class="btn btn-sm btn-success float-right">ALL ADMIN</a>
                </h6>
                <div class="form-layout">
                        <div class="row  mb-5">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Name: {{$admin->name}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Email: {{$admin->email}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Phone  {{$admin->phone}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Current Permission  </label>
                                    <label class="form-control-label">

                                        @if($admin->access->category == 1)
                                            <span class="badge badge-danger">Category</span>
                                        @endif
                                        @if($admin->access->coupon == 1)
                                            <span class="badge badge-success">coupon</span>
                                        @endif

                                        @if($admin->access->product == 1)
                                            <span class="badge badge-info">product</span>
                                        @endif

                                        @if($admin->access->blog == 1)
                                            <span class="badge badge-warning">blog</span>
                                        @endif

                                        @if($admin->access->order == 1)
                                            <span class="badge badge-primary">order</span>
                                        @endif

                                        @if($admin->access->other == 1)
                                            <span class="badge badge-danger">other</span>
                                        @endif

                                        @if($admin->access->access == 1)
                                            <span class="badge badge-info">role</span>
                                        @endif

                                        @if($admin->access->site_setting == 1)
                                            <span class="badge badge-success">setting</span>
                                        @endif
                                    </label>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <hr>
                    <form action="{{route('update.admin')}}" method="post" >
                        @csrf
                        <h6 class="card-body-title">Permission <span class="tx-danger">*</span></h6>
                        <div class="row mt-3">

                            <div class="col-lg-3">
                                <label class="ckbox">
                                    <input type="checkbox" name="category" value="1">
                                    <span>Category</span>
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="ckbox">
                                    <input type="checkbox" name="coupon" value="1">
                                    <span>Coupon</span>
                                </label>
                            </div>

                            <div class="col-lg-3">
                                <label class="ckbox">
                                    <input type="checkbox" name="product" value="1">
                                    <span>Product</span>
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="ckbox">
                                    <input type="checkbox" name="access" value="1">
                                    <span>Access</span>
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="ckbox">
                                    <input type="checkbox" name="order" value="1">
                                    <span>Order</span>
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="ckbox">
                                    <input type="checkbox" name="blog" value="1">
                                    <span>Blog</span>
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="ckbox">
                                    <input type="checkbox" name="site_setting" value="1">
                                    <span>Setting</span>
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="ckbox">
                                    <input type="checkbox" name="other" value="1">
                                    <span>Other</span>
                                </label>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$admin->id}}">
                        <div class="form-layout-footer mg-t-15">
                            <button class="btn btn-info mg-r-5" type="submit">Update </button>
                        </div><!-- form-layout-footer -->
                    </form>
                    </div>

            </div><!-- card -->
        </div>
    </div>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
