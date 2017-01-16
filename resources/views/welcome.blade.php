@extends('layout')
@section('content')
<div class="title">ArtistBase</div>
<form method="POST" action="/artist/search">

  {{ csrf_field() }}
  <input type="search" name="artist">
  <button name="submit">Submit</button>
</form>
@endsection
