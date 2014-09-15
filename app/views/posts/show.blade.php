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
                            <h2>{{ link_to_route('show_post', $post->title, [ 'id' => $post->id ])  }}</h2>
                        </div>
                        <div class="post-meta">
                            <span><em>By <a href="#">{{ $post->user->name  }}</a></em></span>
                            <span><em>{{ $post->published_at  }}</em></span>
                            <span>
                                <em>
                                    In
                                    @foreach($post->categories as $category)
                                         <a href="#">{{ $category->name  }}</a>
                                    @endforeach
                                </em>
                            </span>
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


            </div>
            <!-- end:sidebar -->

        </div>
    </div>
</section>
<!-- end:content -->
@stop