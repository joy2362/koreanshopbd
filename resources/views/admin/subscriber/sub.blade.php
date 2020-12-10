@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Subscriber Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Subscriber List
                    <a href="#" class="float-right btn btn-sm btn-danger" id="delete" >Delete All </a>
                </h6>


                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Subscriber email</th>
                            <th class="wd-15p">Subscribe At </th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subscribers as $row)
                            <tr>
                                <td><input type="checkbox"> {{$row->id}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{\Carbon\Carbon::parse($row->updated_at)->diffForHumans()}}</td>
                                <td>
                                    <a href="{{url("admin/sub/delete/".$row->id)}}" class=" btn btn-sm btn-danger" id="delete">Delete</a>
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
