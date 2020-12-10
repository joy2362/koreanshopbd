@extends('admin.admin_layouts')

@section('admin_content')
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Order Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Order List</h6>
                <div class="mg-b-10" >  <button id="pickup" class="btn btn-sm btn-info">pickup</button>
                    <button id="delivery" class="btn btn-sm btn-success">Delevered</button>
                    <a href="{{route('generate-pdf')}}" class="btn btn-sm btn-warning">Download Pdf</a>
                </div>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p"><input type="checkbox" name='checkboxMaster' /></th>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Amount</th>
                            <th class="wd-15p">Date</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $row)
                            <tr>
                                <td ><input type="checkbox" id="id_chk1" class="checkRow" value="{{$row->id}}" /></td>
                                <td>{{$row->order_Id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->amount}}</td>
                                <td>{{\Carbon\Carbon::parse($row->created_at)->format('d-m-Y')}}</td>

                                <td>
                                    @if($row->status == '1')
                                        <a href="{{ url('admin/order/progress/'.$row->id) }}" class="btn btn-sm btn-info">pickup</a>
                                    @elseif($row->status == '2')
                                        <a href="{{ url('admin/order/delivered/'.$row->id) }}" class="btn btn-sm btn-info">Delevered</a>
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
    <script src="{{ asset('public/backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('public/backend/js/shiftMultiSelect.js') }}"></script>
    <script>

        $("#pickup").click(function(){
            if (checkValArray.length > 0){
                let data = {
                    'operation':"1",
                    'id': checkValArray,
                    "_token": "{{ csrf_token() }}",
                };

                $.ajax({
                    url:"{{ url('admin/order/status') }}",
                    method:"post",
                    data: data,
                    success:function(data){
                        location.reload();
                    }
                });

            }else{
                toastr.error("Select some order first");
            }
        })
        $("#delivery").click(function(){
            if (checkValArray.length > 0){
                let data = {
                    'operation':"2",
                    'id': checkValArray,
                    "_token": "{{ csrf_token() }}",
                };

                $.ajax({
                    url:"{{ url('admin/order/status') }}",
                    method:"post",
                    data: data,
                    success:function(data){
                        location.reload();
                    }
                });

            }else{
                toastr.error("Select some order first");
            }
        })
    </script>
@endsection
