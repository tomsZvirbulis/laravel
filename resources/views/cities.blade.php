@extends('layout.main')

@section('content')
    <h1>Cities</h1>
    <table class='table-striped table'>
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">City name</th>
              <th scope="col">Country ID</th>
              <th scope="col">Last update</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cities as $city)
              <tr>
                <td scope="col">{{$city->city_id}}</td>
                <td scope="col">{{$city->city}}</td>
                <td scope="col">{{$city->country_id}}</td>
                <td scope="col">{{$city->last_update}}</td>
              </tr>
            @endforeach
          </tbody>
    </table>
@endsection
