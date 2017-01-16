@extends('layout')
@section('content')
<div class="title">
All Artists
</div>

<div class="container">

  @foreach ($artists as $artist)

<ul>
<li>{{$artist->name}}</li>
</ul>


@endforeach
</div>
@endsection
