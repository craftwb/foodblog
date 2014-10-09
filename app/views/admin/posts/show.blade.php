@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-xs-9">

            <div>
                {{ $post->title  }}
            </div>

            <div>

                {{ $post->user->name  }}

            </div>

            <div>
                {{ $post->body  }}
            </div>

        </div>
    </div>

@stop
