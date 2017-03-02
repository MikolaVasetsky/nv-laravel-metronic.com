@extends('admin.layouts.master')

<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page_plugin_css')
	<link href="{{asset('assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
@endsection
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN CONTENT -->
@section('content')
	<div class="page-content-wrapper">
		<div class="page-content">
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
			<h1 class="page-title"> Create post
				<small>add post</small>
			</h1>
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light portlet-fit portlet-form bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class=" icon-layers font-red"></i>
								<span class="caption-subject font-red sbold uppercase">Create post</span>
							</div>
						</div>
						<div class="portlet-body">
							{{ Form::open(['route' => 'admin.posts.store', 'id' => 'create_post']) }}
								<div class="form-body">
									@include('admin.layouts.errors')

									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check body post.
									</div>

									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>

									<div class="form-group form-md-line-input form-md-floating-label">
										{{Form::text('title', null, ['class' => 'form-control'])}}
										{{Form::label('title', 'Title')}}
									</div>

									<div class="form-group form-md-line-input form-md-floating-label">
										{{Form::textarea('body', null ,['class' => 'form-control', 'id' => 'post_body'])}}
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-12">
											{{Form::submit('Publish Post', ['class' => 'btn green-haze'])}} </div>
										</div>
									</div>
								</div>
							{{Form::close()}}
						</div>
					</div>
				</div>
			</div>
		</div>
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
	<script src="{{asset('js/create_post.js')}}" type="text/javascript"></script>
@endsection
<!-- END PAGE LEVEL SCRIPTS -->