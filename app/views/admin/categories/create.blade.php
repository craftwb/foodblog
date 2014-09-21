@extends('layouts.admin')

@section('content')

@include('layouts.partials.errors')

    <div class="row">
        <div class="col-xs-9">
            {{ Form::open(['route' => 'admin.categories.store', 'class' => 'form-group', 'role' => 'form'])  }}

                <h2 class="form-signin-heading">Add New Category</h2>

                <div class="form-group">
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'The Category name'])  }}
                </div>

                <div>
                    {{ Form::submit('Create Category', ['class' => 'btn btn-lg btn-primary'])  }}
                </div>

            {{ Form::close()  }}
        </div>
    </div>

@stop