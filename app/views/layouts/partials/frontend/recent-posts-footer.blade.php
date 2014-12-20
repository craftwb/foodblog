<h3>Recent Post</h3>
<ul class="list-unstyled">

    @foreach($posts as $post)
        <li>
            {{ link_to_route('show_post', str_limit($post->title, 30), [ 'id' => $post->id, 'slug' => $post->slug ])  }}
        </li>
    @endforeach

</ul>