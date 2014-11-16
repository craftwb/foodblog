@extends('layouts.blog')

@section('content')

<!-- begin:content -->
<section id="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-8 col-sm-8">
                <div class="row">

                    <div class="col-md-12">
                        <h1>Blog Posts</h1>
                    </div>

                    @foreach($posts as $post)

                        <div class="col-md-12 post-single">
                            <div class="heading-title">
                                <h2>{{ link_to_route('show_post', $post->title, [ 'id' => $post->id, 'slug' => $post->slug ]) }}</h2>
                            </div>
                            <div class="post-meta">
                                <span><em>By <a href="#">{{ $post->user->name  }}</a></em></span>
                                <span><em>{{ $post->published_at->diffForHumans()  }}</em></span>
                                <span>
                                    <em>In
                                        @foreach($post->categories as $category)
                                            <a href="#">{{ $category->name  }}</a>
                                        @endforeach
                                    </em>
                                </span>
                            </div>

                            <p>{{ $post->body }}</p>
                        </div>

                    @endforeach

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