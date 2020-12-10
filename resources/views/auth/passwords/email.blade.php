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
                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group mt-20">
                            <input type="email" value="{{ old('email') }}" autofocus  placeholder="Email" name="email" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-info">{{ __('Send Password Reset Link') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

