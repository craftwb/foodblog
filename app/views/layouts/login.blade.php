
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Madame Ferré | Sign In</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/main.css">

  </head>

  <body>

    <div class="container login">

        @include('layouts.partials.flash')

        @yield('content')

    </div> <!-- /container -->

    <script src="/frontend/js/jquery.js"></script>
    <script src="/frontend/js/bootstrap.js"></script>
    <script src="/frontend/js/masonry.pkgd.min.js"></script>
    <script src="/frontend/js/jquery.isotope.min.js"></script>
    <script src="/frontend/js/jquery.easing.js"></script>
    <script src="/frontend/js/script.js"></script>

  </body>
</html>
