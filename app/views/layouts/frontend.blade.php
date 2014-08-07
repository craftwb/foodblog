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

<!-- begin:navbar -->
<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><i class="fa fa-recycle"></i> <span>Dani</span>sh.</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-top">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/frontend/index.html">Home</a></li>
                <li><a href="/frontend/about.html">About</a></li>
                <li><a href="/frontend/contact.html">Contact</a></li>
                <li><a href="/frontend/page.html">Page</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/frontend/blog.html">Blog</a></li>
                        <li><a href="/frontend/single.html">Single</a></li>
                        <li><a href="/frontend/archive.html">Archives</a></li>
                        <li><a href="/frontend/category.html">Category</a></li>
                        <li><a href="/frontend/portfolio.html">Portfolio</a></li>
                        <li><a href="/frontend/portfolio-single.html">Portfolio Single</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- end:navbar -->

<!-- begin:header -->
<section id="header" style="background: url(/frontend/img/img03.jpg) center center;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <blockquote>
                    <p>Mendapatkan hati wanita cantik itu tidak mudah, apalagi jika kamu tidak terlalu lucu ~</p>
                    <small>Tarjono</small>
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
<section id="content">
    <div class="container">
        @yield('content')
        <!-- end:article -->

    </div>
</section>
<!-- end:content -->


<!-- begin:footer -->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="widget">
                    <h3>Recent Post</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Lorem sit</a></li>
                        <li><a href="#">Lorem dolor sit</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="widget">
                    <h3>Useful Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Lorem sit</a></li>
                        <li><a href="#">Lorem dolor sit</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="footer-logo">
                    <h2><i class="fa fa-recycle"></i> Danish.</h2>
                    <p>1024 Main Street, Jejeran Plrt Btl<br>+62 (123) 456-7890</p>
                    <br>
                    <p class="muted">© 2014 Brand Inc.</p>
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end:footer -->

<!-- begin:copyright -->
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 copy-left">
                <p>Copyright &copy; 2014 <strong>avriqqlabs</strong>. All Right Reserved.</p>
            </div>

            <div class="col-md-6 col-sm-6 copy-right">
                <ul class="list-inline social-icon">
                    <li><a href="#" class="icon-twitter" rel="tooltip" title="" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icon-facebook" rel="tooltip" title="" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#" class="icon-youtube" rel="tooltip" title="" data-placement="top" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#" class="icon-instagram" rel="tooltip" title="" data-placement="top" data-original-title="Instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end:copyrigt -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/script.js"></script>
</body>
</html>
