$(document).ready(function() {
	$('.eliminarUsuario').click(function() {
		var href = $(this).data('url'),
			usuario = $(this).data('usuario');
		
		bootbox.confirm({
			title:'Atención!',
			size:'small',
			message:'Confirma bloquear el usuario: ' + usuario + '?',
			buttons: {
				confirm: {
				  label:'Bloquear',
				},
				cancel: {
				  label:'Cancelar',
				},
			},
			callback: function(result) {
				if (result) {
					window.location.replace(urlBase + href);
				}
			}
		});
		
		return false;
	});
	$('.activarUsuario').click(function() {
		var href = $(this).data('url'),
			usuario = $(this).data('usuario');
		
		bootbox.confirm({
			title:'Atención!',
			size:'small',
			message:'Confirma activar el usuario: ' + usuario + '?',
			buttons: {
				confirm: {
				  label:'Activar',
				},
				cancel: {
				  label:'Cancelar',
				},
			},
			callback: function(result) {
				if (result) {
					window.location.replace(urlBase + href);
				}
			}
		});
		
		return false;
	});
});