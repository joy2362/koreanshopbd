@extends('layouts/master')
@section('content')
<div class="container mt-30 ">
    <div class="row">
        <div class="col-md-4"></div>
        <div class=" col-sm-12 col-md-4">
            <div class="card">
                <h2 class="card-header text-center mb-30">
                    {{_('Registation')}}
                </h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group mt-30">
                        <input type="name" value="{{ old('name') }}" autofocus  placeholder="Full name" name="name" class="form-control">
                    </div>
                    <div class="form-group mt-20">
                        <input type="email" value="{{ old('email') }}" autofocus  placeholder="Email" name="email" class="form-control">
                    </div>
                    <div class="form-group mt-20">
                        <input type="text" value="{{ old('phone') }}" autofocus  placeholder="phone number" name="phone" class="form-control">
                    </div>
                    <div class="form-group mt-20">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                    </div>
                    <div class="form-group mt-20">
                        <input type="password" class="form-control" placeholder="Repeat Password" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-info">Registaion</button>
                    <div class="form-group mt-30 text-center">
                        <span> Or Already Member
                        <a href="{{ url('login') }}">
                           Login
                        </a>
                            </span>
                    </div>
                </form>
                <!--
                <p class=" text-center  mt-60">
                    Or Login Using
                </p>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="{{ url('/auth/redirect/google') }}" class="btn btn-success"><i class="fa fa-google-plus"></i> Google</a>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
</div>
@endsection
