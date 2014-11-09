@extends('layouts.admin')

@section('content')

    <div>
        <div id="user-profile-3" class="user-profile row">
            <div class="col-sm-offset-1 col-sm-10">

                <div class="space"></div>

                <form class="form-horizontal">
                    <div class="tabbable">
                        <ul class="nav nav-tabs padding-16">
                            <li class="active">
                                <a data-toggle="tab" href="#edit-basic">
                                    <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                                    Basic Info
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#edit-settings">
                                    <i class="purple ace-icon fa fa-cog bigger-125"></i>
                                    Settings
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#edit-password">
                                    <i class="blue ace-icon fa fa-key bigger-125"></i>
                                    Password
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content profile-edit-tab-content">
                            <div id="edit-basic" class="tab-pane in active">
                                <h4 class="header blue bolder smaller">General</h4>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <input type="file" />
                                    </div>

                                    <div class="vspace-12-sm"></div>

                                    <div class="col-xs-12 col-sm-8">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

                                            <div class="col-sm-8">
                                                <input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>

                                            <div class="col-sm-8">
                                                <input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
                                                <input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr />
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>

                                    <div class="col-sm-9">
                                        <div class="input-medium">
                                            <div class="input-group">
                                                <input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
                                                <span class="input-group-addon">
                                                    <i class="ace-icon fa fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right">Gender</label>

                                    <div class="col-sm-9">
                                        <label class="inline">
                                            <input name="form-field-radio" type="radio" class="ace" />
                                            <span class="lbl middle"> Male</span>
                                        </label>

                                        &nbsp; &nbsp; &nbsp;
                                        <label class="inline">
                                            <input name="form-field-radio" type="radio" class="ace" />
                                            <span class="lbl middle"> Female</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Comment</label>

                                    <div class="col-sm-9">
                                        <textarea id="form-field-comment"></textarea>
                                    </div>
                                </div>

                                <div class="space"></div>
                                <h4 class="header blue bolder smaller">Contact</h4>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

                                    <div class="col-sm-9">
                                        <span class="input-icon input-icon-right">
                                            <input type="email" id="form-field-email" value="alexdoe@gmail.com" />
                                            <i class="ace-icon fa fa-envelope"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>

                                    <div class="col-sm-9">
                                        <span class="input-icon input-icon-right">
                                            <input type="url" id="form-field-website" value="http://www.alexdoe.com/" />
                                            <i class="ace-icon fa fa-globe"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

                                    <div class="col-sm-9">
                                        <span class="input-icon input-icon-right">
                                            <input class="input-medium input-mask-phone" type="text" id="form-field-phone" />
                                            <i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="space"></div>
                                <h4 class="header blue bolder smaller">Social</h4>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>

                                    <div class="col-sm-9">
                                        <span class="input-icon">
                                            <input type="text" value="facebook_alexdoe" id="form-field-facebook" />
                                            <i class="ace-icon fa fa-facebook blue"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

                                    <div class="col-sm-9">
                                        <span class="input-icon">
                                            <input type="text" value="twitter_alexdoe" id="form-field-twitter" />
                                            <i class="ace-icon fa fa-twitter light-blue"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

                                    <div class="col-sm-9">
                                        <span class="input-icon">
                                            <input type="text" value="google_alexdoe" id="form-field-gplus" />
                                            <i class="ace-icon fa fa-google-plus red"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div id="edit-settings" class="tab-pane">
                                <div class="space-10"></div>

                                <div>
                                    <label class="inline">
                                        <input type="checkbox" name="form-field-checkbox" class="ace" />
                                        <span class="lbl"> Make my profile public</span>
                                    </label>
                                </div>

                                <div class="space-8"></div>

                                <div>
                                    <label class="inline">
                                        <input type="checkbox" name="form-field-checkbox" class="ace" />
                                        <span class="lbl"> Email me new updates</span>
                                    </label>
                                </div>

                                <div class="space-8"></div>

                                <div>
                                    <label class="inline">
                                        <input type="checkbox" name="form-field-checkbox" class="ace" />
                                        <span class="lbl"> Keep a history of my conversations</span>
                                    </label>

                                    <label class="inline">
                                        <span class="space-2 block"></span>

                                        for
                                        <input type="text" class="input-mini" maxlength="3" />
                                        days
                                    </label>
                                </div>
                            </div>

                            <div id="edit-password" class="tab-pane">
                                <div class="space-10"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

                                    <div class="col-sm-9">
                                        <input type="password" id="form-field-pass1" />
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

                                    <div class="col-sm-9">
                                        <input type="password" id="form-field-pass2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="button">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Save
                            </button>

                            &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div><!-- /.span -->
        </div><!-- /.user-profile -->
    </div>

@stop