@extends('admin.admin_layouts')

@section('admin_content')
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Site Setting</h5>
            </div>
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title ">Current Details
                    <button class="float-right btn btn-sm btn-warning" data-toggle="modal" data-target="#infoModel">Edit</button>
                </h6>
                <div class="form-layout">
                    <div class="row mg-b-25 mb-5">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Site Name:  {{$setting->site_name}}</label>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Address: {{$setting->address}}</label>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Phone  {{$setting->phone_1}} </label>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Email: {{$setting->email}}</label>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Facebook: {{$setting->facebook_link}}</label>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Instagram: {{$setting->instagram_link}}</label>
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Delivery Cost(Inside Dhaka): {{$setting->shiping_cost_inside_dhaka}} BDT</label>
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Delivery Cost(OutSide Dhaka): {{$setting->shiping_cost_outside_dhaka}} BDT</label>
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">About: </label>
                                <p>{!! $setting->about !!}</p>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <lebel>Logo <span class="tx-danger">*</span></lebel>
                            <img src="{{asset($setting->logo)}}" id="one" height=150 width="150"  class="mt-2">
                        </div>
                    </div><!-- row -->
                </div>
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->
        <!-- Modal -->
        <div id="infoModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="reg" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pd-20">
                        <form action="{{route('editsiteSetting')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row  mb-10">
                                <div class="form-group col-sm-12">
                                    <label for="site_name">Site Name</label>
                                    <input type="text" class="form-control " id="site_name" name="site_name" value="{{$setting->site_name}}">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control " id="address" name="address" value="{{$setting->address}}">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="phone_1">Phone 1</label>
                                    <input type="text" class="form-control " id="phone_1" name="phone_1" value="{{$setting->phone_1}}">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control " id="email" name="email" value="{{$setting->email}}">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="facebook_link">Facebook</label>
                                    <input type="text" class="form-control " id="facebook_link" name="facebook_link" value="{{$setting->facebook_link}}">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="instagram_link">Instagram</label>
                                    <input type="text" class="form-control " id="instagram_link" name="instagram_link" value="{{$setting->instagram_link}}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="logo">Logo</label>
                                    <input type="file" class="form-control" name="logo">
                                    <input type="hidden" class="form-control" name="oldlogo" value="{{$setting->logo}}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="instagram_link">Delivery cost(Inside Dhaka)</label>
                                    <input type="text" class="form-control " id="instagram_link" name="shiping_cost_inside_dhaka" value="{{$setting->shiping_cost_inside_dhaka}}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="instagram_link">Delivery cost(Outside Dhaka)</label>
                                    <input type="text" class="form-control " id="instagram_link" name="shiping_cost_outside_dhaka" value="{{$setting->shiping_cost_outside_dhaka}}">
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">About</label>
                                            <textarea class="form-control" id="summernote" name="product_details">
                                        {!! $setting->about !!}
                                </textarea>
                                        </div>
                                    </div>
                                </div><!-- col-4 -->
                            </div><!-- modal-body -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Save</button>
                                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- modal-dialog -->
@endsection
