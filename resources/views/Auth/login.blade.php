<h3>login page</h3>

@if ($errors->has('email'))

    <span class="error">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
<form action="{{route('store')}}" method="POST">
    @csrf
    <input type="email" name="email" id="email" placeholder="email">
    <input type="password" name="password" id="password" placeholder="password">
    <button name="login">login</button>
</form>
