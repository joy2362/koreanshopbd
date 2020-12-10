@extends('layouts/master')
@section('content')
    <div class="container mt-30 ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class=" col-sm-12 col-md-4">
                <div class="card">
                    <h2 class="card-header text-center mb-30">
                        {{ __('Reset Password') }}
                    </h2>
                    <form action="{{ route('password.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group mt-20">
                            <input type="email" value="{{ old('email') }}" autofocus  placeholder="Email" name="email" class="form-control">
                        </div>
                        <div class="form-group mt-20">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                        </div>
                        <div class="form-group mt-20">
                            <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-info">  {{ __('Reset Password') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

