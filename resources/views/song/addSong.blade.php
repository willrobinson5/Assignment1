@extends('layout')
@section('content')
  <div class="title">
    Add a Song for {{$artist->name}} {{--Shows the artists name that was clicked--}}
  </div>

  <div class="songForm"> {{--Creates the form for adding to the songs table--}}
    <form method="POST" action="/song/{{$artist->id}}/addSong">
      {{ csrf_field() }}
      <input name="title" placeholder="Title"></textarea>
      <input name="length" placeholder="Length"></textarea>
      <button name="submit">Save</button>
    </form>
  @endsection
