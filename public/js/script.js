$(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	if ( $('#notific8_text_success').val() ) {
		var notifSettings = {
				theme: 'lime',
				sticky: false,
				horizontalEdge: 'top',
				verticalEdge: 'right',
				heading: $('#notific8_text_success').val(),
				life: 5000
			};
		$.notific8('zindex', 11500);
		$.notific8('Success', notifSettings);
	}
});