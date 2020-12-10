@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>post</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">Post Details</h6>
                <div class="form-layout">
                    <div class="row mg-b-25 mb-5">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label">Post Title: <span class="tx-danger">*</span></label>
                                <p>{{$post->post_title}}</p>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                <p>{{$post->category->category_name}}</p>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-group border border-dark p-2">
                                    <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                                    <p>{!! $post->post_details !!}</p>

                                </div>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <lebel>Image One (Main Thumbnail)<span class="tx-danger">*</span></lebel>
                            <img src="{{asset($post->post_img)}}" id="one"  class="mt-2" height="250px" width="250px">
                        </div>
                    </div><!-- row -->
                    <hr>
                    <div class="form-group ">
                        <label>Status<span class="tx-danger">*</span></label>
                        @if($post->status==1)
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
