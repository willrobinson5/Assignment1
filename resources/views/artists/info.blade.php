@extends('layout')
@section('content')


{{-- <h1><a href="artist/{{$artists->id}}">{{$artists->name}}</a></h1> --}}
<link ref="stylesheet" href="/css/style.css">

<div class="title">
  {{$artist->name}}</br>
<div class="DOB">
  {{$artist->DOB}}</br>
</div>
</div>
@if (Auth::guest())
@else
<div class="buttons">
  <div class="deleteButton">
    <form method="POST" action="/artist/{{$artist->id}}/delete">
      {{ csrf_field() }}
    <button type="submit">Delete</button>
  </form>
    </div>


    <div class="editButton">
  <form method="POST" action="/artist/{{$artist->id}}/edit">
    {{ csrf_field() }}
  <button type="submit">Edit Artist</button>
</form>

<form method="POST" action="/song/{{$artist->id}}/addSongForm">
  {{ csrf_field() }}
<button type="submit">Add a Song</button>
</form>
</div>
</div>
  @endif
<div class="subtitle">
  About
</div>




<div class="container">
{{$artist->about}}
</div>


<div class="subtitle">Songs </div>
<div class="container">
@foreach ($artist->songs as $song)
<li>{{$song->title}} - added by: {{$song->user->name}}
@if (Auth::guest())
@elseif (Auth::user()->id == $song->user->id)
   <form class="form" method="POST" action="/song/{{$song->id}}/delete">
    {{ csrf_field() }}
    <div class = "X">
    <button type="submit" name="submit">X</button>

  </div>
@endif
  </form></li>
</ul>
@endforeach
</div>

@endsection
