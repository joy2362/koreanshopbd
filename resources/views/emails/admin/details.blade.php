@component('mail::message')
    # Wellcome {{$details->name}}

    {{ config('app.name') }} Select you as Admin. Your Admin Account Is Ready

  Your Admin Account Details
    @component('mail::promotion')
        <h1 style="font-size: 25px">Email: {{$details->email}}</h1>
        <h1 style="font-size: 25px">Password: {{$pass}}</h1>
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
