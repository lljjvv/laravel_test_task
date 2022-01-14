@extends('layouts.app')

@section('title', 'Login')
@section('content')

<div class="col-md-6">
    <h3>Login page</h3>
    <form action="{{route('store')}}" method="POST" class="was-validated">
        @csrf
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" placeholder="email" class="form-control is-invalid">
        @if ($errors->has('email'))
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
        @endif
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" placeholder="password" class="form-control is-invalid">
        @if ($errors->has('password'))
        <div class="invalid-feedback">
            {{ $errors->first('password') }}
        </div>
        @endif
        <div class="col-12">
            <button name="login" class="btn btn-primary mt-3">login</button>
        </div>
    </form>
</div>
@endsection