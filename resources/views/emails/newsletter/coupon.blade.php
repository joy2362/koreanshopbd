@component('mail::message')
# Wellcome

Thank you for subscribe. You will get our latest information.
<br>
Here is your free coupon code use this coupon you will get 5% Discount.
@component('mail::promotion')
   <h1 style="font-size: 40px">{{$code}}</h1>
@endcomponent
This coupon valid for one time only.
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
