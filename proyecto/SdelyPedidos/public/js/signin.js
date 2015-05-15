$(function () {
	// revisa si soporta placeholder
	// de ser negativo muestra el label
	jQuery.support.placeholder = false;
	test = document.createElement('input');
	if('placeholder' in test) jQuery.support.placeholder = true;
	if (!$.support.placeholder) {
		$('.field').find ('label').show ();
	}
	$.validate({
		modules:'security',
		form:'#login'
	});
});