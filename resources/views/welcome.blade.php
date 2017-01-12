@extends('layout')
@section('content')
<h1>The Welcome page goes here</h1>
<form method="POST" action="/artist/search">

  {{ csrf_field() }}
  <input type="search" name="artist">
  <button name="submit">Submit</button>
</form>
@endsection
