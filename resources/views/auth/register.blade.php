<form method="POST" action="/register">
    @csrf
    Email: <input type='text' name='email'><br>
    Name: <input type='text' name='name'><br>
    Password: <input type="password" name="password"><br>
    <button type="submit" >
        Submit
    </button>
</form>

<hr>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif