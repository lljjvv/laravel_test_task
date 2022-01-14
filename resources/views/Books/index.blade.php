@extends('layouts.app')

@section('title', 'Registarion')
@section('content')
<div class="col-md-6">
    <h3>Books</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Create date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->resource->id }}</td>
                <td>{{ $book->resource->title }}</td>
                <td>{{ $book->resource->author }}</td>
                <td>{{ $book->resource->created_at->diffForHumans() }}</td>
                <td>
                    <form action="{{ route('books.destroy', $book->resource->id) }}" method="post" class="delete-form">
                        @method('delete')
                        @csrf
                        <button type="submit" name="delete_{{ $book->resource->id }}" class="btn btn-outline-danger delete-btn">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('add-book') }}" class="link-secondary">Add book</a>

    <form action="{{route('logout')}}" method="get">
        <button name="logout" class="btn btn-primary mt-3">Logout</button>
    </form>
</div>

<script src="/js/app.js"></script>
@endsection