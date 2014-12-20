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
            <a class="navbar-brand" href="/"><i class="fa fa-recycle"></i> <span>Madame Ferré</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-top">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ set_active('/')  }}">{{ link_to_route('home', 'Home') }}</li>
                <li class="{{ set_active('blog')  }}">{{ link_to('/blog', 'Blog') }}</li>
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <b class="caret"></b></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--@if(Auth::guest())--}}
                            {{--<li>{{ link_to('/login', 'Sign In')  }}</li>--}}
                            {{--@else--}}
                            {{--<li>{{ link_to_route('admin_dashboard', 'Dashboard')  }}</li>--}}
                            {{--<li>{{ link_to('/logout', 'Logout')  }}</li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- end:navbar -->