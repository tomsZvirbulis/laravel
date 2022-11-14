@extends('layout.main')
@section('content')
    <form class="mt-5" class='' method="POST" action="/login">
        @csrf
        <div style="width: 25vw" class="form-outline mb-4 mx-auto">
            Email: <input type='text' class="form-control" name='email'><br>
        </div>
        <div style="width: 25vw" class="form-outline mb-4 mx-auto">
            Password: <input type="password" class="form-control" name="password"><br>
        </div>
        <div style="width: 25vw" class='mx-auto'>
            <button style="width: 100%" class="btn btn-primary btn-block mb-4" type="submit" >
                Submit
            </button>            
        </div>
    </form>

    <hr>
    <div class='d-flex p-2 bd-highlight' style='justify-content: space-around'>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li style="padding: 1rem; background-color: red; list-style: none; border-radius: 5px;">{{$error}}</li>
            @endforeach
        @endif
    </div>

@endsection