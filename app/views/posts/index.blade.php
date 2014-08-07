@extends('layouts.frontend')

@section('content')

<!-- begin:content -->
<section id="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-8 col-sm-8">
                <div class="row">

                    @foreach($posts as $post)

                        <div class="col-md-12 post-single">
                            <div class="heading-title">
                                <h2>{{ link_to_route('show_post', $post->title, [ 'id' => $post->id ]) }}</h2>
                            </div>
                            <div class="post-meta">
                                <span><em>By <a href="#">tarjono</a></em></span>
                                <span><em>On May 04, 2014</em></span>
                                <span><em>In <a href="#">Love life</a></em></span>
                            </div>

                            <p>{{ $post->body }}</p>
                        </div>

                    @endforeach

                </div>

                <hr>

                <!-- begin:comments -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="comment">
                            <h3>Discussion</h3>
                            <ul class="comments list-unstyled">
                                <li class="clearfix">
                                    <img src="img/avatar.png" class="avatar" alt="danish personal blog and magazine template">
                                    <div class="post-comments">
                                        <p class="meta">Dec 18, 2014 <a href="#">JohnDoe</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Etiam a sapien odio, sit amet
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end:comments -->

                <hr>
                <!-- begin:post-comment -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>Post Comment</h3>
                        <form class="comment-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">

                                    <input type="text" class="form-control" placeholder="Enter Your Name : ">
                                    <input type="email" class="form-control" placeholder="Enter Your Email : ">
                                    <input type="text" class="form-control" placeholder="Enter Your URL : ">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <textarea class="form-control" rows="4" placeholder="Type Your Comment : "></textarea>
                                    <input type="submit" class="btn btn-info btn-lg btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end:post-comment -->
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