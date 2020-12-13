@extends('admin.admin_layouts')

@section('admin_content')
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>User Feedback</h5>
            </div>
            <div class="card pd-20 pd-sm-40 mg-t-50">
                <div class="form-layout">
                    <div class="row mg-b-25 mb-5">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Name:  {{$feedback->name}}</label>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Email: {{$feedback->email}}</label>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Message: </label>
                                <p>{!! $feedback->message !!}</p>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                @if($feedback->status == '0')
                                <form action="{{route('replyFeedback')}}" method="post" >
                                    @csrf
                                    <div class="row  mb-10">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="form-control-label">Reply</label>
                                                    <textarea class="form-control" id="summernote" name="reply"></textarea>
                                                </div>
                                                <input type="hidden" name="id" value="{{$feedback->id}}">
                                            </div>
                                        </div><!-- col-4 -->
                                    </div><!-- modal-body -->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info pd-x-20">Send</button>
                                    </div>
                                </form>
                                @else
                                    <span class="badge badge-success">Reply Send</span>
                                @endif
                            </div><!-- row -->
                            </div>
                        </div><!-- col-4 -->

                </div>
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->
@endsection
