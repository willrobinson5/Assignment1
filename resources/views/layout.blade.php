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

    <div class="navbar">
      <ul>
        <li> <a href="/">Home</a> </li>
        <li> <a href="/artists">Artists</a> </li>
        <li> <a href="/add">Add</a> </li>
        <li>
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
