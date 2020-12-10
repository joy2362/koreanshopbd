<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        .invoice-box {
            max-width: 800px;
            margin-bottom: 100px;
            padding: 10px;
            border: 1px solid #000000;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
        }
        .invoice{
            text-align: center;
        }
        .invoice .name{
            font-size: 30px;
            font-weight: bold;
            color:#341f97;
            line-height: 1px;
            margin-bottom: 0px;
        }
         .invoice .address{
             margin-top: 0;
            font-size: 10px;
         }

         .cod , .contact{
             padding-top: 5px;
             text-align: center;
             text-decoration: underline;
         }
         .info td{
             padding-top: 5px;
         }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
@php
$count = 0;
@endphp
@foreach($order as $row)
    @if($count == 2)
        <div class="page-break "></div>
        @php
            $count = 0;
        @endphp
    @endif
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td class="invoice"  colspan="5">
                <p class="name">Korean Shop Bangladesh</p>
                <p class="address">{{$site->address}}</p>
            </td>
        </tr>
        <tr>
            <td  ></td>
            <td class="contact" colspan="3">Contact: {{$site->phone_1}}</td>
            <td style="text-align: center" colspan="2">Date: @php echo  date(" M  d, Y") @endphp</td>
        </tr>

        <tr class="info">
            <td colspan="5">Name: {{$row->name}}</td>
        </tr>
        <tr class="info">
            <td colspan="5">Address:  {{$row->address}}</td>
        </tr>
        <tr class="info">
            <td colspan="5">Contact no: {{$row->phone}}</td>
        </tr>
        <tr class="info">
            @php
                $details = DB::table('order_details')->where('order_Id',$row->id)->get();
            @endphp

            <td colspan="5">Product:
                @php
                $nameCount=1;
                @endphp
                @foreach($details as $orderDetails)
                    @php
                        $product = DB::table('products')->where('id',$orderDetails->product_id)->first();
                    @endphp
                    {{$product->product_name}}  @if($nameCount<count($details)) ,@endif
                    @php
                        $nameCount++;
                        @endphp

                @endforeach
            </td>

        </tr>
        <tr class="info">
            <td >Price: {{$row->amount - $row->delivery_cost}} tk</td>
            <td >D charge:{{$row->delivery_cost}} tk</td>
            <td >T Price: {{$row->amount}}tk</td>
            <td style="text-align: center">Paid: No</td>
        </tr>

        <tr>
            <td class="cod" colspan="5">
                Cash on delivery
            </td>
        </tr>

    </table>

</div>
    @php
        $count =$count+1;
    @endphp

@endforeach

</body>
</html>
