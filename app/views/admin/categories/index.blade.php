@extends('layouts.admin')

@section('content')

@include('layouts.partials.errors')

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Category</th>
                <th>Date Created</th>
                <th>Date Updated</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

        @foreach($categories as $category)

            <tr>
                <td>{{  $category->name }}</td>
                <td>{{  $category->created_at->toFormattedDateString() }} </td>
                <td>{{  $category->updated_at->toFormattedDateString() }}</td>
                <td>
                    <div class="hidden-sm hidden-xs btn-group">

                        {{ link_to_route('admin.categories.edit', 'Edit', $category->id, [ 'class' => 'ace-icon fa fa-pencil' ]) }}

                        {{ Form::delete('/admin/categories/'.$category->id, 'Trash', '', [ 'class' => 'ace-icon fa fa-trash-o' ]) }}

                    </div>

                </td>
            </tr>

        @endforeach


        </tbody>
    </table>


@stop