@extends('layouts.admin')

@section('content')

<!-- PAGE CONTENT BEGINS -->
<div class="row">

    @include('layouts.partials.admin.recent')

    @include('layouts.partials.admin.conversations')
    
</div><!-- /.row -->

<!-- PAGE CONTENT ENDS -->

@stop
