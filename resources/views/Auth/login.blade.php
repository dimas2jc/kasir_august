@extends('layouts.auth')

@section('content')

    <h5>Sign in</h5>

    <!-- form -->
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username or email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="{{ route('recovery-password') }}">Reset password</a>
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>
    </form>
    <!-- ./ form -->

@endsection
