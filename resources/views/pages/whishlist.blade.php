@extends('layouts/master')

@section('content')
    <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-cart-listing ps-table--whishlist">
                @php
                $number=count($whishlist)
                @endphp
                @if($number >0)
                <table class="table ps-cart__table">
                    <thead>
                    <tr>
                        <th>All Products</th>
                        <th>Price</th>
                        <th>View</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($whishlist as $row)
                    <tr>
                        <td ><a class="ps-product__preview" href="{{url('product-details/'.$row->product_code)}}"><img class="mr-15" src="{{asset($row->img_1)}}" height="100" width="100" alt="">{{$row->product_name}}</a></td>
                        @if($row->discount_price)

                        <td>{{$row->discount_price}} BDT</td>
                        @else
                            <td>{{$row->selling_price}} BDT</td>
                        @endif
                        <td><a class="ps-product-link" href="{{url('product-details/'.$row->id)}}">View Product</a></td>
                        <td>
                            <a class="ps-remove" href="{{url('remove/wishlist/'.$row->whishlistId)}}" ></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $whishlist->links() }}
                @else
                    <p class="ps-service text-center"><strong>Sorry</strong>: No product found</p>

                @endif
            </div>
        </div>
    </div>
@endsection
