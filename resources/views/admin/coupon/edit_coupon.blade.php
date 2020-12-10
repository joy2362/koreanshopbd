@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Coupon </h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Coupon Update</h6>
                <form action="{{route('update.coupon')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="code">Coupon Code</label>
                        <input type="text" class="form-control " id="code" name="code" value="{{$coupon->code}}">
                    </div>
                    <div class="form-group">
                        <label for="discount">Discount(%)</label>
                        <input type="text" class="form-control " id="discount" name="discount" value="{{$coupon->discount}}">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control " id="amount" name="amount" value="{{$coupon->amount}}">
                    </div>
                    <div class="form-group">
                        <label for="limit">Limit</label>
                        <input type="text" class="form-control " id="limit" name="limit" value="{{$coupon->limit}}">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" value="1" class="form-check-input"@if($coupon->status==1) checked @endif name="status">Active
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" value="0" class="form-check-input" @if($coupon->status==0) checked @endif name="status">Inactive
                            </label>
                        </div>
                    </div>
                    <input hidden value="{{$coupon->id}} " name="id">
                    <button type="submit" class="btn btn-info pd-x-20">Update</button>
                </form>
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
