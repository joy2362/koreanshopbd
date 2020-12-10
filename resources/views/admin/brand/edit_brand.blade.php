@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Brand</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Brand Update</h6>
                <form action="{{route('update.brand')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Brand Name</label>
                        <input type="text" class="form-control " id="name" name="brand_name" value="{{$brand->brand_name}}">
                    </div>
                    <div class="form-group">
                        <label for="logo">Brand Logo</label>
                        <input type="file" class="form-control" id="logo" name="brand_logo" >
                    </div>
                    <div class="form-group">
                        <label for="currentlogo">Current logo:</label>
                        <img src="{{URL::to($brand->brand_logo)}}" id="currentlogo" style="width: 100px;height: 100px;">
                    </div>
                    <input hidden value="{{$brand->id}} " name="id">
                    <input hidden value="{{$brand->brand_name}} " name="oldname">
                    <input hidden value="{{$brand->brand_logo}} " name="oldlogo">
                    <button type="submit" class="btn btn-info pd-x-20">Update</button>
                </form>
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
