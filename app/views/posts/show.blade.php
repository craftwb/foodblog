@extends('layouts.blog')

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

                <!-- comments -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="comment">
                            <h3>Discussion</h3>

                            <div id="disqus_thread"></div>
                                <script type="text/javascript">
                                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                    var disqus_shortname = 'madameferre'; // required: replace example with your forum shortname

                                    /* * * DON'T EDIT BELOW THIS LINE * * */
                                    (function() {
                                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                    })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                        </div>
                    </div>
                </div>
                <!-- end comments -->


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


                @include('layouts.partials.frontend.categories-sidebar')


            </div>
            <!-- end:sidebar -->

        </div>
    </div>
</section>
<!-- end:content -->
@stop