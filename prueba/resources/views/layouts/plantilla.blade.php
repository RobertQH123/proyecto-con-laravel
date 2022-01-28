<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    .active{
      background-color: rgba(0,0,0,0.5);
      color: white;
    }
    nav a{
      text-decoration: none;
      color: black;
    }
  </style>
</head>
@include('layouts.partials.header')
<body>
  <h1>@yield('content')</h1>
</body>
</html>