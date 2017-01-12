@extends('layout')
@section('content')

  @foreach ($artist as $artists)

<h1>{{$artists->name}}</h1>


@endforeach

@endsection
