@extends('layout')
@section('content')
  <div class="title">
  Add an Artist
  </div>

  <div class="artistForm">

  <form method="POST" action="/artist/add">
    {{ csrf_field() }}
    <input name="name" placeholder="Artist Name"></textarea>
    <input name="DOB" placeholder="Date of Birth"></textarea>
    <input name="nationality" placeholder="Nationality"></textarea>
    <input name="about" placeholder="About">
    <button name="submit">Save</button>
  </form>
@endsection