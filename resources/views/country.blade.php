@extends('layout.main')

@section('content')
    @foreach ($country as $countr)
        <h3>{{$countr->country}}</h3>
    @endforeach
@endsection
