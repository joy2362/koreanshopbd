@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Products</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">Product Details</h6>
                    <div class="form-layout">
                        <div class="row mg-b-25 mb-5">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Product Name:  {{$product->product_name}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Product Code: {{$product->product_code}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Product Quantity: {{$product-> product_quantity}} </label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category: {{$product->category->category_name}}</label>

                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Brand: {{$product->brand->brand_name}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-3">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Product stock: {{$product->product_stock}}</label>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Selling Price: {{$product->selling_price}}</label>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Discount Price:
                                    @if($product->discount_price)
                                        {{$product->discount_price}}
                                    @else
                                        0
                                    @endif
                                    </label>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Skin type: {{$product->skintype->type_of_skin}}</label>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Skin concern: {{$product->skinconcern->skin_concern}}</label>
                                </div>
                            </div><!-- col-6 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-group border border-dark p-2">
                                        <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                                        <p>{!! $product->product_details !!}</p>

                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-group border border-dark p-2">
                                        <label class="form-control-label">How To Use<span class="tx-danger">*</span></label>
                                        <p>{!! $product->how_to_use !!}</p>

                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-group border border-dark p-2">
                                        <label class="form-control-label">Product Ingredient<span class="tx-danger">*</span></label>
                                        <p>{!! $product->product_ingredient !!}</p>

                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Video Link:
                                    @if($product->video_link)
                                       {{$product->video_link}}
                                    @endif
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <lebel>Image One (Main Thumbnail)<span class="tx-danger">*</span></lebel>
                                <img src="{{asset($product->img_1)}}" id="one" style="height: 150px;width: 150px;" class="mt-2">
                            </div>
                            <div class="col-lg-4">
                                <lebel>Image Two </lebel>
                                @if($product->img_2)
                                    <img src="{{asset($product->img_2)}}" id="two" style="height: 150px;width: 150px;"  class="mt-2">
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <lebel>Image Three </lebel>
                                @if($product->img_3)
                                    <img src="{{asset($product->img_3)}}" id="three" style="height: 150px;width: 150px;"  class="mt-2">
                                 @endif
                            </div>
                        </div><!-- row -->
                        <hr>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                @if($product->main_slider)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inctive</span>
                                @endif
                                    <span>Main Slider</span>
                            </div>
                            <div class="col-lg-4">
                                @if($product->flash_sale)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inctive</span>
                                @endif
                                    <span>Flash sale</span>
                            </div>
                            <div class="col-lg-4">
                                @if($product->trend)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inctive</span>
                                @endif
                                <span>Trend</span>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group mt-3">
                            <label>Status<span class="tx-danger">*</span></label>
                            @if($product->status==1)
                                <span class="badge badge-success">Publish</span>
                            @else
                                <span class="badge badge-danger">Not published</span>
                            @endif
                        </div>
                    </div>
            </div><!-- card -->
        </div>
    </div>
@endsection
