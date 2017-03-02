@if ( count($errors) )
	@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			<button class="close" data-close="alert"></button>
			{{$error}}
		</div>
	@endforeach
@endif