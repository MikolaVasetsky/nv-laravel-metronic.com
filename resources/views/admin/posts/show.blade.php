@extends('admin.layouts.master')

<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page_plugin_css')
	<link href="{{asset('assets/pages/css/blog.min.css')}}" rel="stylesheet" type="text/css" />
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
						<span>Post: {{$post->id}}</span>
					</li>
				</ul>
			</div>
			<!-- END PAGE BAR -->
			<!-- BEGIN PAGE TITLE-->
			<h1 class="page-title"> Post
				<small>Look at post</small>
			</h1>
			<!-- END PAGE TITLE-->
			<!-- END PAGE HEADER-->
			<div class="blog-page blog-content-2">
				<div class="row">
					<div class="col-lg-9">
						<div class="blog-single-content bordered blog-container">
							<div class="blog-single-head">
								<h1 class="blog-single-head-title">{{$post->title}}</h1>
								<div class="blog-single-head-date">
									<i class="icon-calendar font-blue"></i>
									<a href="javascript:;">{{$post->created_at->toFormattedDateString()}}</a>
								</div>
							</div>
							{!!$post->body!!}
							<div class="blog-single-foot">
								<ul class="blog-post-tags">
									@foreach($post->tags as $tag)
										<li class="uppercase">
											<a href="{{route('admin.posts.tags', $tag->name)}}">{{$tag->name}}</a>
										</li>
									@endforeach
								</ul>
							</div>
							<div class="blog-comments">
								<h3 class="sbold blog-comments-title">Comments(30)</h3>
								<div class="c-comment-list">
									<div class="media">
										<div class="media-left">
											<a href="#">
												<img class="media-object" alt="" src="{{asset('assets/pages/img/avatars/team1.jpg')}}"> </a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">
												<a href="#">Sean</a> on
												<span class="c-date">23 May 2015, 10:40AM</span>
											</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
									</div>
									<div class="media">
										<div class="media-left">
											<a href="#">
												<img class="media-object" alt="" src="{{asset('assets/pages/img/avatars/team3.jpg')}}"> </a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">
												<a href="#">Strong Strong</a> on
												<span class="c-date">21 May 2015, 11:40AM</span>
											</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
											<div class="media">
												<div class="media-left">
													<a href="#">
														<img class="media-object" alt="" src="{{asset('assets/pages/img/avatars/team4.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<h4 class="media-heading">
														<a href="#">Emma Stone</a> on
														<span class="c-date">30 May 2015, 9:40PM</span>
													</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-left">
											<a href="#">
												<img class="media-object" alt="" src="{{asset('assets/pages/img/avatars/team7.jpg')}}"> </a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">
												<a href="#">Nick Nilson</a> on
												<span class="c-date">30 May 2015, 9:40PM</span>
											</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
									</div>
								</div>
								<!--
								<h3 class="sbold blog-comments-title">Leave A Comment</h3>
								<form action="#">
									<div class="form-group">
										<input type="text" placeholder="Your Name" class="form-control c-square"> </div>
									<div class="form-group">
										<input type="text" placeholder="Your Email" class="form-control c-square"> </div>
									<div class="form-group">
										<input type="text" placeholder="Your Website" class="form-control c-square"> </div>
									<div class="form-group">
										<textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="btn blue uppercase btn-md sbold btn-block">Submit</button>
									</div>
								</form>
								-->
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="blog-single-sidebar bordered blog-container">
							<!--
							<div class="blog-single-sidebar-search">
								<div class="input-icon right">
									<i class="icon-magnifier"></i>
									<input type="text" class="form-control" placeholder="Search Blog"> </div>
							</div>
							-->
							<div class="blog-single-sidebar-recent">
								<h3 class="blog-sidebar-title uppercase">Recent Posts</h3>
								<ul>
									@foreach($lastPosts as $post)
										<li>
											<a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a>
										</li>
									@endforeach
								</ul>
							</div>
							<div class="blog-single-sidebar-tags">
								<h3 class="blog-sidebar-title uppercase">Tags</h3>
								<ul class="blog-post-tags">
									@foreach($tags as $tag)
										<li class="uppercase">
											<a href="{{route('admin.posts.tags', $tag)}}">{{$tag}}</a>
										</li>
									@endforeach
								</ul>
							</div>
							<div class="blog-single-sidebar-links">
								<h3 class="blog-sidebar-title uppercase">Useful Links</h3>
								<ul>
									<li>
										<a href="javascript:;">Lorem Ipsum </a>
									</li>
									<li>
										<a href="javascript:;">Dolore Amet</a>
									</li>
									<li>
										<a href="javascript:;">Metronic Database</a>
									</li>
									<li>
										<a href="javascript:;">UI Features</a>
									</li>
									<li>
										<a href="javascript:;">Advanced Forms</a>
									</li>
								</ul>
							</div>
							<!--
							<div class="blog-single-sidebar-ui">
								<h3 class="blog-sidebar-title uppercase">UI Examples</h3>
								<div class="row ui-margin">
									<div class="col-xs-4 ui-padding">
										<a href="javascript:;">
											<img src="{{asset('assets/pages/img/background/1.jpg')}}" />
										</a>
									</div>
									<div class="col-xs-4 ui-padding">
										<a href="javascript:;">
											<img src="{{asset('assets/pages/img/background/37.jpg')}}" />
										</a>
									</div>
									<div class="col-xs-4 ui-padding">
										<a href="javascript:;">
											<img src="{{asset('assets/pages/img/background/57.jpg')}}" />
										</a>
									</div>
									<div class="col-xs-4 ui-padding">
										<a href="javascript:;">
											<img src="{{asset('assets/pages/img/background/53.jpg')}}" />
										</a>
									</div>
									<div class="col-xs-4 ui-padding">
										<a href="javascript:;">
											<img src="{{asset('assets/pages/img/background/59.jpg')}}" />
										</a>
									</div>
									<div class="col-xs-4 ui-padding">
										<a href="javascript:;">
											<img src="{{asset('assets/pages/img/background/42.jpg')}}" />
										</a>
									</div>
								</div>
							</div>
							-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT BODY -->
	</div>
@endsection
<!-- END CONTENT -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page_plugin_js')

@endsection
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
@section('page_scripts_js')

@endsection
<!-- END PAGE LEVEL SCRIPTS -->