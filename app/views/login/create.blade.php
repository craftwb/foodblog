@extends('layouts.login')

@section('content')

<div class="row">

    <div class="col-xs-12">

        @include('layouts.partials.errors')

        <h1 class="form-signin-heading">Madame Ferré</h1>

        {{ Form::open(['route' => 'login.store', 'class' => 'form-signin', 'role' => 'form'])  }}

            <div class="form-group">
                <label for="email">Email*</label>
                {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Required*'])  }}
            </div>

            <div class="form-group">
                <label for="password">Password*</label>
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Required*'])  }}
            </div>

            <div class="form-group">

                <div class="checkbox">
                    <label>
                        {{ Form::checkbox('checkbox', 'remember')  }} Remember me
                    </label>
                </div>

            </div>

            <div class="form-group buttons">
                {{ Form::submit('Sign In', ['class' => 'btn btn-info'])  }}
            </div>

        {{ Form::close()  }}

    </div>

</div>

@stop