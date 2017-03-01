@extends('admin.layouts.master')

<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page_plugin_css')
    <link href="{{asset('assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
@endsection
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN CONTENT -->
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{route('admin')}}">Admin</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="{{route('admin.posts')}}">Posts</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Create</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Create post
                <small>add post</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-red"></i>
                                <span class="caption-subject font-red sbold uppercase">Create post</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="{{route('admin.posts.store')}}" id="form_sample_3" method="POST">
                                {{ csrf_field() }}
                                <div class="form-body">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" name="name" id="form_control_1">
                                        <label for="form_control_1">Title</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <div name="summernote" id="summernote_1"> </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn green-haze">Publish</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection
<!-- END CONTENT -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page_plugin_js')
    <script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script>
@endsection
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
@section('page_scripts_js')
    <script src="{{asset('assets/pages/scripts/form-validation-md.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/pages/scripts/components-editors.min.js')}}" type="text/javascript"></script>
@endsection
<!-- END PAGE LEVEL SCRIPTS -->