@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Slider</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Slider Update</h6>
                <form action="{{route('update.mainslider')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title <span class="tx-danger">*</span></label>
                        <input type="text" class="form-control " id="title" name="title" value="{{$slider->title}}">
                    </div>
                    <div class="form-group">
                        <label >Short Description <span class="tx-danger">*</span></label>
                        <textarea class="form-control"name="description">
                            {{$slider->description }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="background">Product name <span class="tx-danger">*</span></label>
                        <select class="form-control select2" data-placeholder="Choose Product" name="product_id">
                            <option label="Choose Product"></option>
                            @foreach($product as $row)
                                @if($slider->product_id === $row->id)
                                    <option value="{{$row->id}}" selected>{{$row->product_name}}</option>
                                @else
                                    <option value="{{$row->id}}" >{{$row->product_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="background">Background <span class="tx-danger">*</span></label>
                        <input type="file" class="form-control" name="background" id="background">
                    </div>
                    <div class="form-group">
                        <label for="currentlogo">Current Background:</label>
                        <img src="{{URL::to($slider->background)}}" id="currentlogo" style="width: 100px;height: 100px;">
                    </div>
                    <input hidden value="{{$slider->id}} " name="id">
                    <input hidden value="{{$slider->background}} " name="oldimage">
                    <button type="submit" class="btn btn-info pd-x-20">Update</button>
                </form>
            </div><!-- card -->
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
