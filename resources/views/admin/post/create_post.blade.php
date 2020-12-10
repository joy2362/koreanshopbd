@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Post</h5>
            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">New Post
                    <a href="{{route('view.post')}}" class="btn btn-sm btn-success float-right">ALL Post</a>
                </h6>
                <p>Add new Post recode to the database</p>
                <form action="{{route('store.post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25 mb-5">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="form-control-label">Post Title: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="post_title"  >
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                                        <option label="Choose Category"></option>
                                        @foreach($category as $row)
                                            <option value="{{$row->id}}">{{$row->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-control-label">Post Details<span class="tx-danger">*</span></label>
                                        <textarea class="form-control" id="summernote" name="post_details">
                                    </textarea>
                                    </div>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <lebel>Image One (Main Thumbnail)<span class="tx-danger">*</span></lebel>
                                <label class="custom-file">
                                    <input type="file" id="file" class="custom-file-input" name="post_img" onchange="readURL(this);"  accept="image">
                                    <span class="custom-file-control"></span>
                                    <img src="#" id="one"  class="mt-2">
                                </label>
                            </div>
                        </div><!-- row -->
                        <hr>
                        <div class="form-group mt-3">
                            <label>Status<span class="tx-danger">*</span></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" value="1" class="form-check-input" checked name="status">Publish
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" value="0" class="form-check-input" name="status">Hide
                                </label>
                            </div>
                        </div>
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5" type="submit">Save </button>
                        </div><!-- form-layout-footer -->
                    </div>
                </form>
            </div><!-- card -->
        </div>
    </div>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
