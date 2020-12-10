@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Products</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">New Product
                <a href="{{route('view.product')}}" class="btn btn-sm btn-success float-right">ALL PRODUCT</a>
                </h6>
                <p>Add new Product recode to the database</p>
                <form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                    <div class="row mg-b-25 mb-5">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="product_name"  >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="product_code"  >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Product Quantity <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="product_quantity"  >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Selling Price <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="selling_price"  >
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Discount Price </label>
                                <input class="form-control" type="text" name="discount_price" >
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Product stock<span class="tx-danger">*</span> </label>
                                <input class="form-control" type="text" name="product_stock">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                                    <option label="Choose Category"></option>
                                    @foreach($category as $row)
                                        <option value="{{$row->id}}">{{$row->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" data-placeholder="Choose Brand" name="brand_id">
                                    <option label="Choose Brand"></option>
                                    @foreach($brand as $row)
                                        <option value="{{$row->id}}">{{$row->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Skin Type: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" data-placeholder="Choose Skin Type" name="skin_type_id">
                                    <option label="Choose Skin Type"></option>
                                    @foreach($skintype as $row)
                                        <option value="{{$row->id}}">{{$row->type_of_skin}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Skin Concern: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" data-placeholder="Choose Skin Concern" name="skin_concern_id">
                                    <option label="Choose Skin Concern"></option>
                                    @foreach($skinconcern as $row)
                                        <option value="{{$row->id}}">{{$row->skin_concern}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                                    <textarea class="form-control" id="summernote" name="product_details">
                                    </textarea>
                                </div>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-control-label">How to use<span class="tx-danger">*</span></label>
                                    <textarea class="form-control" id="summernote1" name="how_to_use">
                                    </textarea>
                                </div>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-control-label">Product Ingredient<span class="tx-danger">*</span></label>
                                    <textarea class="form-control" id="summernote2" name="product_ingredient">
                                    </textarea>
                                </div>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Video Link:</label>
                                <input class="form-control" placeholder="video link" name="video_link">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <lebel>Image One (Main Thumbnail)<span class="tx-danger">*</span></lebel>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="img_1" onchange="readURL(this);"  accept="image">
                                <span class="custom-file-control"></span>
                                <img src="#" id="one"  class="mt-2">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <lebel>Image Two </lebel>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="img_2" onchange="readURL1(this);" accept="image">
                                <span class="custom-file-control"></span>
                                <img src="#" id="two"  class="mt-2">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <lebel>Image Three </lebel>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="img_3" onchange="readURL2(this);"  accept="/image">
                                <span class="custom-file-control"></span>
                                <img src="#" id="three" class="mt-2" >
                            </label>
                        </div>
                    </div><!-- row -->
                        <hr>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="main_slider" value="1">
                                    <span>Main Slider</span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="flash_sale" value="1">
                                    <span>Flash sale</span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="trend" value="1">
                                    <span>Trend</span>
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group mt-3">
                            <label>Status<span class="tx-danger">*</span></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" value="1" class="form-check-input" checked name="status">Publish
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" value="0" class="form-check-input" name="status">Hide
                                </label>
                            </div>
                        </div>
                        <div class="form-layout-footer">
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
        <script type="text/javascript">
            function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#two')
                            .attr('src', e.target.result)
                            .width(80)
                            .height(80);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        <script type="text/javascript">
            function readURL2(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#three')
                            .attr('src', e.target.result)
                            .width(80)
                            .height(80);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
@endsection
