@extends('layouts.admin')

@section('content')

@include('layouts.partials.errors')

    <div class="row">
        <div class="col-xs-9">
            {{ Form::open(['route' => 'posts.store', 'class' => 'form-group', 'role' => 'form'])  }}

                <h2 class="form-signin-heading">Add New Post</h2>

                <div>
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter title'])  }}
                </div>

                <div class="widget-box widget-color-blue">
                   <div class="widget-header widget-header-small"></div>
                   <div class="widget-body">
                      <div class="widget-main no-padding">
                         {{ Form::textarea('body', null, ['class' => 'form-control', 'data-provide' => 'markdown-editable'])  }}
                      </div>
                   </div>
                </div>

                <div>
                    {{ Form::submit('Publish', ['class' => 'btn btn-lg btn-primary'])  }}
                </div>

            {{ Form::close()  }}
        </div>
    </div>
@stop
