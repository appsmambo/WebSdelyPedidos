$(document).ready(function() {
	$('#distrito').autocomplete({
		type:'post',
		minChars:3,
		serviceUrl:urlBase + '/ubigeo',
		onSelect: function (suggestion) {
			alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
		}
	});
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