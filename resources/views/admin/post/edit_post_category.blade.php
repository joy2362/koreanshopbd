@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Category </h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Category Update</h6>


                <form action="{{route('update.post.category')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control " id="name" name="category_name" value="{{$category->category_name}}">
                    </div>
                    <input hidden value="{{$category->id}} " name="id">
                    <input hidden value="{{$category->category_name}} " name="oldname">
                    <button type="submit" class="btn btn-info pd-x-20">Update</button>
                </form>
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
