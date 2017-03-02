jQuery(document).ready(function() {
	$('#post_body').summernote({height: 300});

	var form = $('#create_post');
	var error = $('.alert-danger', form);
	var success = $('.alert-success', form);

	form.validate({
		errorElement: 'span', //default input error message container
		errorClass: 'help-block help-block-error', // default input error message class
		focusInvalid: false, // do not focus the last invalid input
		ignore: "", // validate all fields including form hidden input
		rules: {
			title: {
				minlength: 2,
				required: true
			},
			body: {
				required: true
			}
		},

		invalidHandler: function(event, validator) { //display error alert on form submit
			success.hide();
			error.show();
			App.scrollTo(error, -200);
		},

		errorPlacement: function(error, element) {
			error.insertAfter(element); // for other inputs, just perform default behavior
		},

		highlight: function(element) { // hightlight error inputs
			$(element)
				.closest('.form-group').addClass('has-error'); // set error class to the control group
		},

		unhighlight: function(element) { // revert the change done by hightlight
			$(element)
				.closest('.form-group').removeClass('has-error'); // set error class to the control group
		},

		success: function(label) {
			label
				.closest('.form-group').removeClass('has-error'); // set success class to the control group
		},

		submitHandler: function(form) {
			success.show();
			error.hide();
			form.submit();
		}
	});
});