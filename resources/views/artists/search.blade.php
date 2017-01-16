@extends('layout')
@section('content')

  @foreach ($artists as $artist)

<h1><a href="/artist/{{$artist->id}}">{{$artist->name}}</a></h1>



@endforeach

@endsection
