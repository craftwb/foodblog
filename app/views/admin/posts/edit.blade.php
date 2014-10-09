@extends('layouts.admin')

@section('content')

@include('layouts.partials.errors')

    <div class="row">
        <div class="col-xs-9">
            {{ Form::model($post, [ 'method' => 'PUT', 'route' => ['admin.posts.update' , $post->id], 'class' => 'form-group', 'role' => 'form'])  }}

                <h2 class="form-signin-heading">Edit Post</h2>

                <div class="form-group">
                    {{ Form::text('title', null, ['class' => 'form-control'])  }}
                </div>

                <div class="form-group">
                    {{ Form::textarea('body', null, ['class' => 'form-control'])  }}
                </div>

                <div>
                    {{ Form::submit('Edit', ['class' => 'btn btn-lg btn-primary'])  }}
                </div>

            {{ Form::close()  }}
        </div>
    </div>

@stop

@stop