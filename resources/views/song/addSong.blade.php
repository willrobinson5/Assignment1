@extends('layout')
@section('content')
  <div class="title">
  Add a Song for {{$artist->name}}
  </div>

  <div class="songForm">

  <form method="POST" action="/song/{{$artist->id}}/addSong">
    {{ csrf_field() }}
    <input name="title" placeholder="Title"></textarea>
    <input name="length" placeholder="Length"></textarea>
    <button name="submit">Save</button>
  </form>
@endsection
