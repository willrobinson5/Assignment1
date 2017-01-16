@extends('layout')
@section('content')


{{-- <h1><a href="artist/{{$artists->id}}">{{$artists->name}}</a></h1> --}}

{{$artist->name}}
{{$artist->about}}


@endsection
