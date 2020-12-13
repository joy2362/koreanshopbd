@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Order</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">New Order
                    <a href="{{route('all-order')}}" class="btn btn-sm btn-success float-right">ALL PRODUCT</a>
                </h6>
                <form action="{{route('store-order')}}" method="post" >
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25 mb-5">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="name"  >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email" >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Phone <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone"  >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Location: <span class="tx-danger">*</span></label>
                                        <select class="form-control select2" data-placeholder="Choose Location" name="location">
                                            <option label="Choose Location"></option>
                                                <option value="1">Inside Dhaka</option>
                                                <option value="2">Outside Dhaka</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label class="form-control-label">Address <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="address"  >
                                </div>
                            </div><!-- col-6 -->
                        </div><!-- row -->
                        <hr>
                        <h6 class="card-body-title">Select Products</h6>
                        <div class="row mt-3 mb-5">
                            @foreach($product as $row)
                            <div class="col-lg-3">
                                <label class="ckbox">
                                    <input type="checkbox" name="product[]" value="{{$row->id}}">
                                    <span>{{$row->product_name}}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5" type="submit">Next Step </button>
                        </div><!-- form-layout-footer -->
                    </div>
                </form>
            </div><!-- card -->
        </div>
    </div>
@endsection
