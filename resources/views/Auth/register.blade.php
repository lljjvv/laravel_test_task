@extends('layouts.app')

@section('title', 'Registarion')
@section('content')

<div class="col-md-6">
    <h3>Registration</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('create')}}" method="POST" class="was-validated">
        @csrf
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" placeholder="name" class="form-control is-invalid">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" placeholder="email" class="form-control is-invalid">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" placeholder="password" class="form-control is-invalid">
        <div class="col-12">
            <button name="register" class="btn btn-primary mt-3">register</button>
        </div>
    </form>
</div>
@endsection