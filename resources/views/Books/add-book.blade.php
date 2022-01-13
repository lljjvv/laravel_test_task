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

<form action="{{route('books.store')}}" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="title">
    <input type="text" name="author" id="author" placeholder="author">
    <input type="date" name="release_date" id="release_date" placeholder="release_date">

    <button name="add book">add book</button>
</form>

<form action="{{route('logout')}}" method="get">
    <button name="logout">logout</button>
</form>