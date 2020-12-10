@extends('layouts/master')

@section('content')
    <div class="container mt-30 ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class=" col-sm-12 col-md-4">
                <div class="card">
                    <h2 class="card-header text-center mb-30">
                        {{ __('Track Your Order') }}
                    </h2>
                    <form method="post" action="{{ route('order.tracking') }}">
                        @csrf

                        <div class="form-group mt-20">
                            <input type="text" name="code" required="" class="form-control" placeholder="Order id" @isset($track) value="{{$track->order_Id}}"@endisset>
                        </div>
                        <button type="submit" class="btn btn-info"> {{ __('Track') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @isset($track)
        <div class="container mt-20">
            <div class="row" >
                <div class="col-md-4"></div>
                <div class="col-sm-12 col-md-4"  style="border: 1px solid grey; padding: 20px;">
                    <div >
                        <div class="mt-20 text-center"> Order Summary</div>
                        <div class="jumbotron">
                            <ul>
                                <li class="mb-10">Order Id:  {{ $track->order_Id }}</li>
                                <li class="mb-10">Name:  {{ $track->name }}</li>
                                <li class="mb-10">Order Date:  {{ \Carbon\Carbon::parse($track->created_at)->format('d-m-Y') }}</li>
                                <li>Total: {{ $track->amount }} BDT</li>
                            </ul>
                        </div>
                        <div class="contact_form_title text-center">Your Order Status</div> <br>

                        <div class="progress">

                            @if($track->status == '1' )

                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                    processing
                                </div>

                            @elseif($track->status == '2')
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                    Picked
                                </div>
                            @elseif($track->status == '3')
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                    Delevered
                                </div>
                            @else
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">

                            @endif
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @endisset
@endsection
