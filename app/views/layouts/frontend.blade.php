<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/frontend/img/favicon.png">

    <title>Environment = {{ app::environment() }}</title>

    <!-- Bootstrap core CSS -->
    <link href="/frontend/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif:700,400italic' rel='stylesheet' type='text/css'>
    <link href="/frontend/css/font-awesome.min.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet">
    <link href="/frontend/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/frontend/js/html5shiv.js"></script>
    <script src="/frontend/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

@include('layouts.partials.frontend.nav')

<!-- begin:header -->
<section id="header" style="background: url(/frontend/img/img03.jpg) center center;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <blockquote>
                    <p>A less offending line, which serves as a placeholder for something more creative.</p>
                    <small>Under the cosh Dev</small>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- end:header -->

<!-- begin:featured -->
<div id="featured">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="featured-container">
                    <div class="featured-img" style="background: url(/frontend/img/img03.jpg);">
                        <h3><a href="#">Post title / Your Category..</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="featured-container">
                    <div class="featured-img" style="background: url(/frontend/img/img04.jpg);">
                        <h3><a href="#">Post title / Your Category..</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="featured-container">
                    <div class="featured-img" style="background: url(/frontend/img/img05.jpg);">
                        <h3><a href="#">Post title / Your Category..</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:featured -->

<!-- begin:content -->

@yield('content')

<!-- end:content -->

@include('layouts.partials.frontend.footer')

@include('layouts.partials.frontend.copyright')


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/frontend/js/jquery.js"></script>
<script src="/frontend/js/bootstrap.js"></script>
<script src="/frontend/js/masonry.pkgd.min.js"></script>
<script src="/frontend/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="/frontend/js/gmap3.min.js"></script>
<script src="/frontend/js/jquery.isotope.min.js"></script>
<script src="/frontend/js/jquery.easing.js"></script>
<script src="/frontend/js/script.js"></script>
</body>
</html>
