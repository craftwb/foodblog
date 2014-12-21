@extends('layouts.admin')

@section('content')

@include('layouts.partials.errors')

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Categories</th>
                <th>Date Published</th>
                <th>Created By</th>
                <th>Date Created</th>
                <th>Date Updated</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

	        @foreach($posts as $post)

	            <tr>
	                <td>{{  $post->title }}</td>
	                @forelse($post->categories as $category)
	                	<td>{{ $category->name }}</td>
	                @empty
	                    <td></td>
	                @endforelse
	                <td>{{  $post->published_at->toFormattedDateString() }}</td>
	                <td>{{  $post->user->name }}</td>
	                <td>{{  $post->created_at->toFormattedDateString() }}</td>
	                <td>{{  $post->updated_at->toFormattedDateString() }}</td>
	                <td>
	                    <div class="hidden-sm hidden-xs btn-group">

							{{ link_to_route('posts.show', 'View', $post->id, [ 'class' => 'ace-icon fa fa-check' ])  }}

							{{ link_to_route('admin.posts.edit', 'Edit', $post->id, [ 'class' => 'ace-icon fa fa-pencil' ]) }}

							{{ Form::delete('/admin/posts/'.$post->id, 'Trash', '', [ 'class' => 'ace-icon fa fa-trash-o' ]) }}

	                    </div>

	                </td>
	            </tr>

	        @endforeach


        </tbody>
    </table>

    {{ $posts->links() }}

@stop