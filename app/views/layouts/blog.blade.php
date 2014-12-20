<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Madame Ferré | Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="/frontend/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif:700,400italic' rel='stylesheet' type='text/css'>
    <link href="/frontend/css/font-awesome.min.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet">
    <link href="/frontend/css/responsive.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/frontend/js/html5shiv.js"></script>
      <script src="/frontend/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- begin:navbar -->
    @include('layouts.partials.frontend.nav')
    <!-- end:navbar -->

    <!-- begin:header -->
    <section id="header" class="heading" style="background: url(img/img04.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="title-desc">
                        <h2>Our Blog /</h2>
                        <p>'Ere, provide us with a creative line.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- end:header -->

    <!-- begin:content -->
    @yield('content')
    <!-- end:content -->

    <!-- begin:footer -->
    @include('layouts.partials.frontend.footer')
    <!-- end:footer -->

    <!-- begin:copyright -->
    @include('layouts.partials.frontend.copyright')
    <!-- end:copyrigt -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/frontend/js/jquery.js"></script>
    <script src="/frontend/js/bootstrap.js"></script>
    <script src="/frontend/js/masonry.pkgd.min.js"></script>
    <script src="/frontend/js/imagesloaded.pkgd.min.js"></script>
    <script type="/frontend/text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="/frontend/js/gmap3.min.js"></script>
    <script src="/frontend/js/jquery.isotope.min.js"></script>
    <script src="/frontend/js/jquery.easing.js"></script>
    <script src="/frontend/js/script.js"></script>
  </body>
</html>