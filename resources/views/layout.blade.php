<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Jack Inc')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>

      @yield('content')

      <ul>
        <li>
          <a href="/">Home</a>
        </li>
        <li>
          <a href="/contact">Contact us</a>
        </li>
        <li>
          <a href="/about">About us</a>
        </li>
      </ul>

    </body>
</html>

