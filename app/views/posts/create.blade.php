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

                    <div class="widget-header widget-header-small">

                    </div>

                    <div class="widget-body">

                        <div class="widget-main no-padding">
                            <div class="md-editor">

                                <div class="md-header btn-toolbar">

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm" title="Bold (Ctrl+B)" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B" disabled="disabled"><span class="fa fa-bold"></span> </button><button type="button" class="btn btn-default btn-sm" title="Italic (Ctrl+I)" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I" disabled="disabled"><span class="fa fa-italic"></span> </button><button type="button" class="btn btn-default btn-sm" title="Heading (Ctrl+H)" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H" disabled="disabled"><span class="fa fa-font"></span> </button>
                                    </div>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm" title="URL/Link (Ctrl+L)" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L" disabled="disabled"><span class="fa fa-link"></span> </button><button type="button" class="btn btn-default btn-sm" title="Image (Ctrl+G)" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G" disabled="disabled"><span class="fa fa-picture-o"></span> </button>
                                    </div>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm" title="Unordered List (Ctrl+U)" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U" disabled="disabled"><span class="fa fa-list"></span> </button><button type="button" class="btn btn-default btn-sm" title="Ordered List (Ctrl+O)" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O" disabled="disabled"><span class="fa fa-list-ol"></span> </button><button type="button" class="btn btn-default btn-sm" title="Code (Ctrl+K)" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K" disabled="disabled"><span class="fa fa-code"></span> </button><button type="button" class="btn btn-default btn-sm" title="Quote (Ctrl+Q)" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q" disabled="disabled"><span class="fa fa-quote-left"></span> </button>
                                    </div>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm btn-default btn-sm active" title="Preview (Ctrl+P)" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P" data-toggle="button"><span class="fa fa-search"></span> Preview</button>
                                    </div>

                                </div>

                            </div>

                            {{ Form::textarea('body', null, ['class' => 'form-control', 'name' => 'content', 'data-provide' => 'markdown', 'data-iconlibrary' => 'fa'])  }}

                        </div>

                        <div class="widget-toolbox padding-4 clearfix">
                            <div class="btn-group pull-left">
                                <button class="btn btn-sm btn-info">
                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                    Cancel
                                </button>
                            </div>

                            <div class="btn-group pull-right">
                                <button class="btn btn-sm btn-purple">
                                    <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                                    Save
                                </button>
                            </div>
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
