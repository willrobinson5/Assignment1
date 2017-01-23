@extends('layout')
@section('content')
  <div class="title">
  Add an Artist
  </div>

  <div class="formStyle">

  <form method="POST" action="/artist/add">
    {{ csrf_field() }}
    <textarea name="name" placeholder="Artist Name"></textarea>
    <textarea name="DOB" placeholder="Date of Birth"></textarea>
    <textarea name="nationality" placeholder="Nationality"></textarea>
    <textarea name="about" placeholder="About"></textarea>
    <button name="submit">Save</button>
  </form>
@endsection
