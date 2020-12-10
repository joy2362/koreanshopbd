@extends('layouts/master')
@section('content')
    <div class="container mt-30 ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-sm-12 col-md-4 ">
                <div class="card ">
                    <h2 class="card-header text-center mb-30">
                        {{ __('Verify Your Email Address') }}
                    </h2>
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }}
                        <button type="submit" class="btn btn-info"> {{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

