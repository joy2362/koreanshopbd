@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Post Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Post List
                    <a href="{{route('add.post')}}" class="float-right btn btn-sm btn-warning" >Add new </a>
                </h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Post Title</th>
                            <th class="wd-15p">Category</th>
                            <th class="wd-15p"> Image</th>
                            <th class="wd-15p"> Status</th>
                            <th class="wd-15p">Last Update</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blog as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row-> post_title}}</td>
                                <td>{{$row-> category->category_name}}</td>
                                <td><img src="{{URL::to($row-> post_img)}}" style="height: 70px;width: 70px;"></td>
                                <td>@if($row->status==1)<span class="badge badge-success">Active</span>  @else<span class="badge badge-warning">Inactive</span>   @endif </td>
                                <td>{{\Carbon\Carbon::parse($row->updated_at)->diffForHumans()}}</td>
                                <td>
                                    <a href="{{url("admin/post/edit/".$row->id)}}" class=" btn btn-sm btn-primary" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="{{url("admin/post/delete/".$row->id)}}" class=" btn btn-sm btn-danger"title="Delete" id="delete"><i class="fa fa-trash-o"></i></a>
                                    <a href="{{url("admin/post/view/".$row->id)}}" class=" btn btn-sm btn-warning" title="View"><i class="fa fa-window-maximize" ></i></a>
                                    @if($row->status==0)
                                        <a href="{{url("admin/post/active/".$row->id)}}" class=" btn btn-sm btn-success" title="Active"><i class="fa fa-eye" ></i></a>
                                    @else
                                        <a href="{{url("admin/post/deactivate/".$row->id)}}" class=" btn btn-sm btn-danger" title="Inactive"><i class="fa fa-eye-slash" ></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
