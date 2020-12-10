@extends('layouts/master')

@section('content')
    <div class="container pt-80 pb-80">
        <div class="row">
            <div class="col-sm-12">
                <div class="ps-cart-listing">
                    <table class="table ps-cart__table">
                        <thead>
                        <tr>
                            <th>Payment Type</th>
                            <th >Return</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Order Id</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $row)
                            <tr>
                                <td>{{ $row->card_type }}</td>
                                <td>
                                    @if($row->return_order == 0)
                                        <span class="badge badge-warning">No Request</span>
                                    @elseif($row->return_order == 1)
                                        <span class="badge badge-info">Pending</span>
                                    @elseif($row->return_order == 2)
                                        <span class="badge badge-info">Success </span>
                                    @endif
                                </td>
                                <td>{{ $row->amount }} BDT</td>
                                <td>{{ $row->order_at }}</td>
                                <td>{{ $row->transaction_id }}</td>
                                <td>
                                    @if($row->return_order == 0)

                                        @if($row->status == "Processing")
                                            <span class="badge badge-warning">Pending</span>
                                        @elseif($row->status == 'accept')
                                            <span class="badge badge-info">Payment Accept</span>
                                        @elseif($row->status == 'deleveryprogress')
                                            <span class="badge badge-info">Progress </span>
                                        @elseif($row->status == 'done')
                                            <span class="badge badge-success">Delevered </span>
                                        @else
                                            <span class="badge badge-danger">Cancel </span>
                                        @endif
                                    @elseif($row->return_order == 1)
                                        <span class="badge badge-info">Pending</span>
                                    @elseif($row->return_order == 2)
                                        <span class="badge badge-info">Success </span>
                                    @endif
                                </td>
                                <td>
                                    @if($row->return_order == 0)
                                        <a href="{{ url('/request/return/'.$row->id) }}" class="btn btn-sm btn-danger" id="return">Return</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
