@extends('layouts/master')
@section('content')
<div class="container mt-30 ">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-sm-12 col-md-4 ">
            <div class="card ">
                <h2 class="card-header text-center mb-30">
                   Login
                </h2>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group mt-30">
                    <input type="email" value="{{ old('email') }}" autofocus  placeholder="Email address" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group mt-20">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                </div>
                <div class="form-group form-check mt-30">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <div class="form-group  mt-30">
                    <button type="submit" class="btn btn-info">Login</button>
                    <a href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                </div>
                <div class="form-group mt-30 text-center">
                    <a href="{{route('register')}}">
                        Create an account
                    </a>
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
