<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <meta name="description" content="My first technical task">
  <meta name="author" content="Zane Priedīte">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/app.css">
</head>

<body>
  @include('partials.navigation')
  @yield('content')
  <script src="js/app.js"></script>
</body>

</html>