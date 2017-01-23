@extends('layout')
@section('content')


  {{-- <h1><a href="artist/{{$artists->id}}">{{$artists->name}}</a></h1> --}}
  <link ref="stylesheet" href="/css/style.css">
  <script src="/js/openTab.js" type="text/javascript"></script>

  <div class="title">
    {{$artist->name}}</br>
    <div class="DOB">
      {{$artist->DOB}}</br>
    </div>
    <div class="nationality">
      {{$artist->nationality}}</br>
    </div>
  </div>
  @if (Auth::guest())
  @else

    {{--  --}}
    <ul class="tab">
      <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Add')">Add a song</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Edit')">Edit info</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Delete')">Delete Artist</a></li>

    </ul>
    <div id="Add" class="tabcontent">
      <link ref="stylesheet" href="/css/style.css">
      <div class="formStyle">
        <form method="POST" action="/song/{{$artist->id}}/addSong">
          {{ csrf_field() }}
          <textarea name="title" placeholder="Title"></textarea>
          <textarea name="length" placeholder="Length"></textarea>
          <button name="submit">Save</button>
        </form>
      </div>
    </div>


    <div id="Edit" class="tabcontent">
      <link ref="stylesheet" href="/css/style.css">
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
    </div>

    <div id="Delete" class="tabcontent">
      <div class="deleteButton">
        <form method="POST" action="/artist/{{$artist->id}}/delete">
          {{ csrf_field() }}
          <h1>Are you sure you want to delete the artist?</h1>
          <button type="submit">Delete</button>
        </form>
      </div>
    </div>

  @endif
  <div class="subtitle">
    About
  </div>

  <div class="container">
    {{$artist->about}}
  </div>

  <div class="subtitle">Songs </div>
  <div class="container">
    @foreach ($artist->songs as $song)
      <li>{{$song->title}} ({{$song->length}}) - added by: {{$song->user->name}}
        @if (Auth::guest())
        @elseif (Auth::user()->id == $song->user->id)
          <form class="form" method="POST" action="/song/{{$song->id}}/delete">
            {{ csrf_field() }}
            <div class = "X">
              <button type="submit" name="submit">X</button>

            </div>
          @endif
        </form></li>
      </ul>
    @endforeach
  </div>

@endsection
