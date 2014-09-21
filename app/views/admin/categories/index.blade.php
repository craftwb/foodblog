@extends('layouts.admin')

@section('content')

@include('layouts.partials.errors')

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date Created</th>
                <th>Date Updated</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

        @foreach($categories as $category)

            <tr>
                <td>{{  $category->name }}</td>
                <td>{{  $category->created_at }} </td>
                <td>{{  $category->updated_at }}</td>
                <td>
                    <div class="hidden-sm hidden-xs btn-group">
                        <button type="submit" href="#" class="btn btn-xs btn-success">
                            <i class="ace-icon fa fa-check bigger-120"></i>
                        </button> 


                        <button type="submit" class="btn btn-xs btn-info">
                            {{ link_to_route('admin.categories.edit', '', $category->id, [ 'class' => 'ace-icon fa fa-pencil bigger-120' ]) }}
                        </button>

                        
                        
                        <i class="fa fa-trash bigger-120">
                            {{ Form::delete('/admin/categories/'.$category->id, 'Trash', '', [ 'class' => 'btn btn-xs btn-danger' ]) }}
                        </i>


                    </div>

                </td>
            </tr>

        @endforeach


        </tbody>
    </table>


@stop