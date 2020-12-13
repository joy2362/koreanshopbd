@extends('admin.admin_layouts')

@section('admin_content')
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Admin Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Admin List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Email</th>
                            <th class="wd-15p">Permission</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admin as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>


                                    @if($row->access->category == 1)
                                        <span class="badge badge-danger">Category</span>
                                    @endif
                                    @if($row->access->coupon == 1)
                                        <span class="badge badge-success">coupon</span>
                                    @endif

                                    @if($row->access->product == 1)
                                        <span class="badge badge-info">product</span>
                                    @endif

                                    @if($row->access->blog == 1)
                                        <span class="badge badge-warning">blog</span>
                                    @endif

                                    @if($row->access->order == 1)
                                        <span class="badge badge-primary">order</span>
                                    @endif

                                    @if($row->access->other == 1)
                                        <span class="badge badge-danger">other</span>
                                    @endif




                                    @if($row->access->access == 1)
                                        <span class="badge badge-info">role</span>
                                    @endif



                                    @if($row->access->site_setting == 1)
                                        <span class="badge badge-success">setting</span>
                                    @endif


                                </td>

                                <td>
                                    <a href="{{url("admin/access/edit/".$row->id)}}" class=" btn btn-sm btn-success" >Edit</a>
                                    <a href="{{url("admin/access/delete/".$row->id)}}" class=" btn btn-sm btn-danger" id="delete">Delete</a>
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
