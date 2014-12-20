<div class="widget-sidebar widget_categories">
    <h3>Categories</h3>
    <ul>

        @foreach($categories as $category)
            <li><a href="">{{ $category->name  }}</a></li>
        @endforeach

    </ul>
</div>