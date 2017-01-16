@extends('layout')
@section('content')
<link ref="stylesheet" href="/css/style.css">
  @foreach ($artists as $artist)

    <div class="container">
<h1><a href="/artist/{{$artist->id}}">{{$artist->name}}</a></h1>
</div>



@endforeach

@endsection
