@extends('admin.layouts.master')

<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page_plugin_css')
    <link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
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
                        <a href="{{route('admin.users')}}">Users</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Ajax Users table
                <small>Users list</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- Begin: Demo Datatable 1 -->
                    <div class="portlet light portlet-fit portlet-datatable bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Users</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-container">
                                <table class="table table-striped table-bordered table-hover table-checkable" id="users_ajax">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th> Id&nbsp;# </th>
                                            <th> Name </th>
                                            <th> Email </th>
                                            <th> Admin </th>
                                            <th> Created </th>
                                            <th> Updated </th>
                                            <th> Edit </th>
                                        </tr>
                                    </thead>
                                    <tbody> </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="admin_search"></td>
                                            <td></td>
                                            <td></td>
                                            <td class="non_searchable"></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End: Demo Datatable 1 -->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection
<!-- END CONTENT -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page_plugin_js')
    <script src="{{asset('assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
@endsection
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
@section('page_scripts_js')
    <script src="{{asset('assets/pages/scripts/table-datatables-ajax.js')}}" type="text/javascript"></script>
@endsection
<!-- END PAGE LEVEL SCRIPTS -->