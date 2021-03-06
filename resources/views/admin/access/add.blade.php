@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Admin</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">New Admin
                    <a href="{{route('admin-access')}}" class="btn btn-sm btn-success float-right">ALL ADMIN</a>
                </h6>
                <form action="{{route('store.admin')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25 mb-5">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email"  >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Phone  <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone"  >
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <label class="form-control-label">Avatar </label>
                                <label class="custom-file">
                                    <input type="file" id="file" class="custom-file-input" name="img_1" onchange="readURL(this);"  accept="image">
                                    <span class="custom-file-control"></span>
                                    <img src="#" id="one"  class="mt-2">
                                </label>
                            </div>

                        </div><!-- row -->
                        <hr>
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
                        <div class="form-layout-footer mg-t-15">
                            <button class="btn btn-info mg-r-5" type="submit">Save </button>
                        </div><!-- form-layout-footer -->
                    </div>
                </form>
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
