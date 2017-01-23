<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/css/style.css" />
  <!-- Styles -->

</head>
@if (Auth::guest())
  <li><a href="{{ url('/login') }}">Login</a></li>
  <li><a href="{{ url('/register') }}">Register</a></li>
@else
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
      <li>
        <a href="{{ url('/logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout
      </a>

      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </ul>
</li>
@endif
<div class="navbar">
  <ul>
    <li> <a href="/">Home</a> </li>
    <li> <a href="/artists">Artists</a> </li>
    <li> <a href="/addArtistForm">Add Artist</a> </li>

    <li>
      {{--Creates the search bar on the homepage--}}
      <div class="searchBar">
        <form method="POST" action="/artist/search">
          {{ csrf_field() }} 
          <input type="search" name="artist" placeholder="Search an artist">
          <button name="submit">Search</button>
        </form>
      </div>
    </li>
  </ul>
</div>
<body>

  @yield('content')

</body>

@yield('footer')

</html>
