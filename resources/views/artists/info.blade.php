@extends('layout')
@section('content')


{{-- <h1><a href="artist/{{$artists->id}}">{{$artists->name}}</a></h1> --}}
<link ref="stylesheet" href="/css/style.css">

<div class="title">
{{$artist->name}}</br>
</div>

  <div class="subtitle">
    About
  </div>

<div class="container">

{{$artist->about}}
</div>

<div class="subtitle">Songs </div>

<div class="container">
@foreach ($artist->songs as $song)
<li>{{$song->title}}</li>
</ul>
@endforeach
</div>
<div class = "deleteArtist" action="/welcome">
   <button type="button">Delete</button>
</div>

@endsection
