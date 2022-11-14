@extends('layout.main')

@section('content')
    <form class='mt-5' method="POST" action="/register">
        @csrf
        <div style="width: 25vw" class="form-outline mb-4 mx-auto">
            Email: <input type='text' class="form-control" name='email'><br>
        </div>
        <div style="width: 25vw" class="form-outline mb-4 mx-auto">
            Name: <input type='text' class="form-control" name='name'><br>
        </div>
        <div style="width: 25vw" class="form-outline mb-4 mx-auto">
            Password: <input type="password" class="form-control" name="password"><br>
        </div>
        <div style="width: 25vw" class="form-outline mb-4 mx-auto">
            Confirm password: <input type="password" class="form-control" name="password_confirmation"><br>
        </div>
        <div style="width: 25vw" class='mx-auto'>
            <button style='width: 100%' class="btn btn-primary btn-block mb-4" class="form-control" type="submit" >
                Register
            </button>
        </div>
    </form>

    <hr>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif

@endsection