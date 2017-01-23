@extends('layout')
@section('content')
@foreach ($artists as $artist)
    <div class="container">
<h1><a href="/artist/{{$artist->id}}">{{$artist->name}}</a></h1>
</div>


@endforeach

@endsection
