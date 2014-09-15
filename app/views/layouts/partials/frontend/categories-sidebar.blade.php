<div class="widget-sidebar widget_categories">
    <h3>Categories</h3>
    <ul>

        @foreach($categories as $category)
            <li><a href="">{{ $category->name  }}</a></li>
        @endforeach
        {{--<li><a href="#">Design</a> (20)</li>--}}
        {{--<li><a href="#">Acessories</a> (32)</li>--}}
        {{--<li><a href="#">Love life</a> (12)</li>--}}
        {{--<li><a href="#">My Work</a> (21)</li>--}}
        {{--<li><a href="#">My Trip</a> (8)</li>--}}
    </ul>
</div>