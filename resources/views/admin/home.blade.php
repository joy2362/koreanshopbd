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
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month </h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $month }} BDT</h3>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col-3 -->

                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-sl-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's</h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $year }} BDT</h3>
                        </div><!-- card-body -->

                    </div><!-- card -->
                </div><!-- col-3 -->
            </div><!-- row -->
            <br>
            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Return</h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold"> {{ $return }} BDT</h3>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col-3 -->

                <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                    <div class="card pd-20 bg-info">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Product</h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $product }}</h3>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col-3 -->

                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-purple">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Brand </h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $brand }}</h3>
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
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
@endsection
