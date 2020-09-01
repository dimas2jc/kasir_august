@extends('layouts.auth')

@section('content')

<h5>@section('title','Change Password')</h5>

<!-- form -->
<form id="form">
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Old Password" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="New Password" required>
    </div>
</form>
<!-- ./ form -->
<div class="text-right">
    <a href="{{ route('dashboard') }}"><button class="btn btn-light">Cancel</button></a>
    <button class="btn btn-primary" form="form" style="margin-left: 5px">Submit</button>
</div>

@endsection