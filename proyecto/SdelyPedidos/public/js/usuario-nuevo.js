$(document).ready(function() {
	$.validate({
		form:'#usuarioNuevo',
		onError : function() {
			// error
		},
		onSuccess : function() {
			// The form is valid!
		},
		onValidate : function() {
			return false;
		},
		onElementValidate : function(valid, $el, $form, errorMess) {
			//console.log('Input ' +$el.attr('name')+ ' is ' + ( valid ? 'VALID':'NOT VALID') );
		}
	});
});