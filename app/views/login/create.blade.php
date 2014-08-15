@extends('layouts.login')

@section('content')

@include('layouts.partials.errors')

    {{ Form::open(['route' => 'login.store', 'class' => 'form-signin', 'role' => 'form'])  }}

        <h2 class="form-signin-heading">Please sign in</h2>

        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email*'])  }}

        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password*'])  }}

        <div class="checkbox">
            <label>
                {{ Form::checkbox('checkbox', 'remember')  }} Remember me
            </label>
        </div>

        {{ Form::submit('Login', ['class' => 'btn btn-lg btn-primary'])  }}

    {{ Form::close()  }}

@stop