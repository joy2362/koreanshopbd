@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Skin </h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Skin type Update</h6>
                <form action="{{route('update.skintype')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Skin type</label>
                        <input type="text" class="form-control " id="name" name="type_of_skin" value="{{$SkinType->type_of_skin}}">
                    </div>
                    <input hidden value="{{$SkinType->id}} " name="id">
                    <input hidden value="{{$SkinType->type_of_skin}} " name="oldname">
                    <button type="submit" class="btn btn-info pd-x-20">Update</button>
                </form>
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
