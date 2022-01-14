@extends('layouts.app')

@section('title', 'Registarion')
@section('content')
<div class="col-md-6">
    <h3>Add book</h3>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('books.store')}}" method="post" class="">
        @csrf
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" placeholder="Title" class="form-control">
        <label for="author" class="form-label">Author</label>
        <input type="text" name="author" id="author" placeholder="Author" class="form-control">
        <label for="release_date" class="form-label">Release date</label>
        <input type="date" name="release_date" id="release_date" placeholder="Release date" class="form-control">

        <div class="col-12">
            <button name="add book" class="btn btn-success mt-3">Add book</button>
        </div>
    </form>

    <form action="{{route('logout')}}" method="get">
        <div class="col-12">
            <button name="logout" class="btn btn-primary mt-3">Logout</button>
        </div>
    </form>
</div>
@endsection