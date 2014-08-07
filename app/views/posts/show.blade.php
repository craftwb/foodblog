@extends('layouts.frontend')

@section('content')
<!-- begin:content -->
<section id="content">
<div class="container">
<div class="row">
<!-- begin:article -->
<div class="col-md-8 col-sm-8">
    <div class="row">
        <div class="col-md-12 post-single">
            <div class="heading-title">
                <h2><a href="single.html">{{ $post->title  }}</h2>
            </div>
            <div class="post-meta">
                <span><em>By <a href="#">tarjono</a></em></span>
                <span><em>On May 04, 2014</em></span>
                <span><em>In <a href="#">Love life</a></em></span>
            </div>
            <p>{{ $post->body }}</p>

        </div>
    </div>


</div>
<!-- end:article -->

<!-- begin:sidebar -->
<div class="col-md-4 col-sm-4 sidebar">
    <div class="widget-sidebar">
        <h3>Search</h3>
        <form id="search" class="navbar-form search" role="search">
            <input type="search" class="form-control input-lg" placeholder="Type your keyword">
            <button type="submit" class="btn btn-info btn-search"><i class="fa fa-arrow-right"></i></button>
        </form>
    </div>

    <div class="widget-sidebar widget_top-posts">
        <h3>Popular Post</h3>
        <ul>
            <li>
                <div class="post-wrapper">
                    <div class="post-img" style="background: url(img/img03.jpg);"></div>
                    <div class="post-text">
                        <div class="post-meta">
                            <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                            <span><em>April 22, 2014</em></span>
                        </div>
                        <div class="heading-title">
                            <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="post-wrapper">
                    <div class="post-img" style="background: url(img/img04.jpg);"></div>
                    <div class="post-text">
                        <div class="post-meta">
                            <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                            <span><em>April 22, 2014</em></span>
                        </div>
                        <div class="heading-title">
                            <h2><a href="#">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin</a></h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="post-wrapper">
                    <div class="post-img" style="background: url(img/img05.jpg);"></div>
                    <div class="post-text">
                        <div class="post-meta">
                            <span><em>in</em> <a href="#" title="View all posts in berita utama" rel="category tag">berita utama</a></span>
                            <span><em>April 22, 2014</em></span>
                        </div>
                        <div class="heading-title">
                            <h2><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h2>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="widget-sidebar default_widget">
        <h3>Link</h3>
        <ul>
            <li><a href="#">Lorem ipsum dolor sit</a></li>
            <li><a href="#">Lorem ipsum sit</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum dolor</a></li>
            <li><a href="#">Lorem ipsum dolor sit</a></li>
        </ul>
    </div>

    <div class="widget-sidebar widget_categories">
        <h3>Categories</h3>
        <ul>
            <li><a href="#">Design</a> (20)</li>
            <li><a href="#">Acessories</a> (32)</li>
            <li><a href="#">Love life</a> (12)</li>
            <li><a href="#">My Work</a> (21)</li>
            <li><a href="#">My Trip</a> (8)</li>
        </ul>
    </div>

    <div class="widget-sidebar widget_archive">
        <h3>Archives</h3>
        <ul>
            <li><a href="#">May 2014</a> (20)</li>
            <li><a href="#">April 2014</a> (32)</li>
            <li><a href="#">March 2014</a> (12)</li>
            <li><a href="#">February 2014</a> (21)</li>
            <li><a href="#">January 2014</a> (8)</li>
        </ul>
    </div>

    <div class="widget-sidebar default_widget">
        <h3>Text Widget</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in.</p>
    </div>

</div>
<!-- end:sidebar -->

</div>
</div>
</section>
<!-- end:content -->
@stop