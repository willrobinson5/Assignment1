@extends('layout')
@section('content')
  <div class="title">
    {{--View to let the user know the user has been deleted--}}
  {{$song->title}} has been deleted successfully!
  </div>

@endsection
