@extends('layout')
@section('content')
  <link ref="stylesheet" href="/css/style.css">
  <div class="title">
    Edit information for {{$artist->name}}</br>
  </div>

<div class="formStyle">
  <form method="POST" action="/artist/{{$artist->id}}/update">
    {{method_field('PATCH')}}
    {{ csrf_field() }}
    <textarea name="name">{{$artist->name}}</textarea>
    <textarea name="DOB">{{$artist->DOB}}</textarea>
    <textarea name="nationality">{{$artist->nationality}}</textarea>
    <textarea class="about" name="about" style="height:100px;">{{$artist->about}}</textarea>
    <button type="submit" value="Edit">Update</button>
  </form>
</div>
@endsection
