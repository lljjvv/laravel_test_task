books

<pre>

</pre>

<div>
    @foreach ($books as $book)
    <div style="display: flex;">
        <h4 style="margin: 5px;">{{ $book->resource->id }}</h4>
        <h4 style="margin: 5px;">{{ $book->resource->title }}</h4>
        <h4 style="margin: 5px;">{{ $book->resource->author }}</h4>
        <form action="{{ route('books.destroy', $book->resource->id) }}" method="post">
            @method('delete')
            @csrf
            <button type="submit" name="delete_{{ $book->resource->id }}">delete</button>
        </form>
    </div>
    @endforeach
</div>

<a href="{{ route('add-book') }}">Add book</a>

<form action="{{route('logout')}}" method="get">
    <button name="logout">logout</button>
</form>