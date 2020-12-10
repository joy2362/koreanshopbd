@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Category Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Skin Type List
                    <a href="#" class="float-right btn btn-sm btn-warning" data-toggle="modal" data-target="#skinModel" >Add new </a>
                </h6>


                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Skin type </th>
                            <th class="wd-15p">Last Update</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($skin as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->type_of_skin}}</td>
                                <td>{{\Carbon\Carbon::parse($row->updated_at)->diffForHumans()}}</td>
                                <td>
                                    <a href="{{url("admin/skintype/edit/".$row->id)}}" class=" btn btn-sm btn-success">Edit </a>
                                    <a href="{{url("admin/skintype/delete/".$row->id)}}" class=" btn btn-sm btn-danger" id="delete">Delete</a>
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

    <!-- Modal -->
    <div id="skinModel" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Skin </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20">
                    <form action="{{route('store.skintype')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Skin Type</label>
                            <input type="text" class="form-control " id="name" name="type_of_skin">
                        </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info pd-x-20">Save</button>
                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div><!-- modal-dialog -->
@endsection
