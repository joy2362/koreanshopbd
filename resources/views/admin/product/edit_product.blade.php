@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Products</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">Edit Product
                    <a href="{{route('view.product')}}" class="btn btn-sm btn-success float-right">ALL PRODUCT</a>
                </h6>
                <p>Update Product information to the database</p>
                <form action="{{route('update.product')}}" method="post">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25 mb-5">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_name" value="{{$product->product_name}}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_code" value="{{$product->product_code}}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Quantity <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_quantity" value="{{$product->product_quantity}}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Selling Price <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="selling_price"  placeholder="Selling Price" value="{{$product->selling_price}}">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Discount Price </label>
                                    <input class="form-control" type="text" name="discount_price"  placeholder="Discount Price" value="{{$product->discount_price}}" >
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product stock<span class="tx-danger">*</span> </label>
                                    <input class="form-control" type="text" name="product_stock" value="{{$product->product_stock}}">
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                                        <option label="Choose Category"></option>
                                        @foreach($category as $row)
                                            @if($product->category->category_name==$row->category_name)
                                                <option value="{{$row->id}}" selected>{{$row->category_name}}</option>
                                            @else
                                                <option value="{{$row->id}}">{{$row->category_name}}</option>
                                            @endif
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
                                            @if($product->brand->brand_name==$row->brand_name)
                                                <option value="{{$row->id}}" selected>{{$row->brand_name}}</option>
                                            @else
                                                <option value="{{$row->id}}">{{$row->brand_name}}</option>
                                            @endif
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
                                            @if($product->skintype->type_of_skin==$row->type_of_skin)
                                                <option value="{{$row->id}}" selected>{{$row->type_of_skin}}</option>
                                            @else
                                                <option value="{{$row->id}}" >{{$row->type_of_skin}}</option>
                                            @endif
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
                                            @if($product->skinconcern->skin_concern==$row->skin_concern)
                                                <option value="{{$row->id}}" selected>{{$row->skin_concern}}</option>
                                            @else
                                                <option value="{{$row->id}}">{{$row->skin_concern}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                                        <textarea class="form-control" id="summernote" name="product_details">
                                            {!! $product->product_details !!}
                                    </textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-control-label">How to use<span class="tx-danger">*</span></label>
                                        <textarea class="form-control" id="summernote1" name="how_to_use">
                                             {!! $product->how_to_use !!}
                                        </textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Ingredient<span class="tx-danger">*</span></label>
                                        <textarea class="form-control" id="summernote2" name="product_ingredient">
                                             {!! $product->product_ingredient !!}
                                        </textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Video Link:</label>
                                    <input class="form-control" placeholder="video link" name="video_link" value="{{$product->video_link}}">
                                </div>
                            </div>
                        </div><!-- row -->
                        <hr>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    @if($product->main_slider)
                                        <input type="checkbox" checked name="main_slider" value="1">
                                    @else
                                        <input type="checkbox" name="main_slider" value="1">
                                    @endif
                                    <span>Main Slider</span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    @if($product->flash_sale)
                                        <input type="checkbox" checked name="flash_sale" value="1">
                                    @else
                                        <input type="checkbox" name="flash_sale" value="1">
                                    @endif
                                    <span>Flash sale</span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    @if($product->trend)
                                        <input type="checkbox" checked name="trend" value="1">
                                    @else
                                        <input type="checkbox" name="trend" value="1">
                                    @endif
                                    <span>Trend</span>
                                </label>
                            </div>
                        </div>
                        <hr>
                        <input hidden value="{{$product->id}}" name="id">
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5" type="submit">Update </button>
                        </div><!-- form-layout-footer -->
                    </div>
                </form>
            </div><!-- card -->
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title pb-2">Change Product Image</h6>
                <form action="{{route('productImage.change')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25 mb-5">
                            <div class="col-lg-4">
                                <lebel>Image One (Main Thumbnail)<span class="tx-danger">*</span></lebel>
                                <label class="custom-file">
                                    <input type="file" id="file" class="custom-file-input" name="img_1" onchange="readURL(this);"  accept="image">
                                    <span class="custom-file-control"></span>
                                    <input type="hidden" name="oldImg_1" value="{{$product->img_1}}">
                                    <img src="{{asset($product->img_1)}} " id="one"  class="mt-2" width="80" height="80">
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <lebel>Image Two </lebel>
                                <label class="custom-file">
                                    <input type="file" id="file" class="custom-file-input" name="img_2" onchange="readURL1(this);" accept="image">
                                    <span class="custom-file-control"></span>
                                    @if($product->img_2)
                                        <input type="hidden" name="oldImg_2" value="{{$product->img_2}}">
                                        <img src="{{asset($product->img_2)}}" id="two"  class="mt-2" width="80" height="80">
                                    @else
                                        <img src="#" id="two"  class="mt-2" >
                                    @endif
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <lebel>Image Three </lebel>
                                <label class="custom-file">
                                    <input type="file" id="file" class="custom-file-input" name="img_3" onchange="readURL2(this);"  accept="/image">
                                    <span class="custom-file-control"></span>
                                    @if($product->img_3)
                                        <input type="hidden" name="oldImg_3" value="{{$product->img_3}}">
                                        <img src="{{asset($product->img_3)}}" id="three"  class="mt-2" width="80" height="80">
                                    @else
                                        <img src="#" id="three" class="mt-2" >
                                    @endif
                                </label>
                            </div>
                        </div>
                        <input hidden value="{{$product->id}}" name="id">
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5" type="submit">change </button>
                        </div><!-- form-layout-footer -->
                    </div>
                </form>
            </div><!-- card -->



        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                if(category_id) {
                    $.ajax({
                        url: "{{  url('/admin/get/subcategory/') }}/"+category_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="sub_category_id"]').empty();
                            $.each(data, function(key, value){

                                $('select[name="sub_category_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');

                            });

                        },

                    });
                } else {
                    swal({
                        title: "Sorry!",
                        text: "Please select valid category!",
                        icon: "error",
                        button: "ok",
                    });
                }

            });
        });

    </script>
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
