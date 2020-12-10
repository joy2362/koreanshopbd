@extends('admin.admin_layouts')

@section('admin_content')
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Order Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Order List</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Amount</th>
                            <th class="wd-15p">Date</th>
                            <th class="wd-15p">Status</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $row)
                            <tr>
                                <td>{{$row->order_Id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->amount}}</td>
                                <td>{{\Carbon\Carbon::parse($row->created_at)->format('d-m-Y')}}</td>
                                @if($row->status == "5")
                                <td><span class="badge badge-primary">Pending</span>
                                </td>
                                @elseif($row->status == "6")
                                    <td><span class="badge badge-success">Success</span></td>
                                @endif
                                <td>
                                    @if($row->status == "5")
                                    <a href="{{ url('admin/order/return/confirm/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Accept Return</a>
                                    @endif
                                    <a href="{{url("admin/order/view/".$row->id)}}" class=" btn btn-sm btn-success" >View</a>
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
