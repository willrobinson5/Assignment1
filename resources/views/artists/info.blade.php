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
  <button type="submit">Edit</button>
</form>

<form method="POST" action="/song/{{$artist->id}}/addSongForm">
  {{ csrf_field() }}
<button type="submit">Add a Song</button>
</form>
</div>
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



@endsection
