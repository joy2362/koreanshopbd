@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Order</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">Quantity
                    <a href="{{route('all-order')}}" class="btn btn-sm btn-success float-right">ALL PRODUCT</a>
                </h6>
                <form action="{{url('admin/order/store')}}" method="post" >
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25 mb-5">
                            @foreach($request->product as $id)
                                <input type="hidden" name="product[]" value="{{$id}}">
                                @php
                                $product = DB::table('products')->where('id',$id)->first();
                                @endphp
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">{{$product->product_name}} <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="number" name="quantity[]"  required>
                                    </div>
                                </div><!-- col-4 -->

                            @if($product->discount_price)
                                <input type="hidden" name="unit_price[]" value="{{$product->discount_price}}">
                                @else
                                    <input type="hidden" name="unit_price[]" value="{{$product->selling_price}}">
                                @endif
                            @endforeach
                        </div>
                        <input type="hidden" name="name" value="{{$request->name}}">
                        <input type="hidden" name="email" value="{{$request->email}}">
                        <input type="hidden" name="phone" value="{{$request->phone}}">
                        <input type="hidden" name="address" value="{{$request->address}}">
                        <input type="hidden" name="location" value="{{$request->location}}">

                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5" type="submit">Save </button>
                        </div><!-- form-layout-footer -->
                    </div>
                </form>
            </div><!-- card -->
        </div>
    </div>
@endsection
