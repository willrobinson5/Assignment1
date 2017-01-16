@extends('layout')
@section('content')


{{-- <h1><a href="artist/{{$artists->id}}">{{$artists->name}}</a></h1> --}}
<link ref="stylesheet" href="/css/style.css">

<div class="title">
{{$artist->name}}</br>
</div>

<div class="container">
{{$artist->about}}
</div>



@endsection
