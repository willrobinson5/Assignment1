@extends('layout')
@section('content')
<div class="title">
All Artists
</div>

<div class="container">

  @foreach ($artists as $artist)

<ul>
  <l1><a href="/artist/{{$artist->id}}">{{$artist->name}}</a></li>
</ul>


@endforeach
</div>
@endsection
