@extends('admin.admin_layouts')
@section('admin_content')

    <div class="sl-mainpanel">

        <div class="sl-pagebody">

            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Order</h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $today }} BDT</h3>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col-3 -->

                <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                    <div class="card pd-20 bg-info">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Delivery</h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $delevery }} BDT</h3>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col-3 -->

                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-purple">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Product </h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold"> {{ $product }} BDT</h3>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col-3 -->

                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-sl-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total User</h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $user }}</h3>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col-3 -->
            </div><!-- row -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Running low</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Stock</th>
                            <th class="wd-15p">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($low_stock as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->product_name}}</td>
                                <td>{{$row->product_stock}}</td>
                                <td>{{\Carbon\Carbon::parse($row->created_at)->format('d-m-Y')}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Recent orders</h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Order By</th>
                            <th class="wd-15p">Amount</th>
                            <th class="wd-15p">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recent_order as $row)
                            <tr>
                                <td>{{$row->order_Id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->user_type}}</td>
                                <td>{{$row->amount}}</td>
                                <td>{{\Carbon\Carbon::parse($row->created_at)->format('d-m-Y')}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->

        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
@endsection
