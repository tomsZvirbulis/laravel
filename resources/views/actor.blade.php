@extends('layout.main')

@section('content')
    <h1>Actor</h1>
    <table class='table-striped table'>
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">First name</th>
              <th scope="col">Last name</th>
              <th scope="col">Last update</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($actors as $actor)
              <tr>
                <td scope="col">{{$actor->actor_id}}</td>
                <td scope="col">{{$actor->first_name}}</td>
                <td scope="col">{{$actor->last_name}}</td>
                <td scope="col">{{$actor->last_update}}</td>
              </tr>
            @endforeach
          </tbody>
    </table>
@endsection
