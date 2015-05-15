@extends('layouts.inicio')
@section('estilos')
		<link href="{{url()}}/css/login.css" rel="stylesheet" type="text/css">
@stop
@section('scripts')
		<script src="{{url()}}/js/form-validator/jquery.form-validator.min.js"></script>
		<script src="{{url()}}/js/signin.js"></script>
@stop
@section('contenido')
		<div class="account-container">
			<div class="content clearfix">

				<form id="login" action="{{url()}}/login" method="post">
					<h1>Acceso usuarios</h1>
@if(count($errors))
					<div class="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Hubo errores!</strong>
@foreach ($errors->all() as $error)
<ul>
	<li>
		{{ $error }}
	</li>
</ul>
@endforeach
					</div>
@endif
					<div class="login-fields">
						<p>Ingrese sus credenciales</p>
						<div class="field">
							<label for="username">Usuario:</label>
							<input type="text" id="usuario" name="usuario" value="" placeholder="Usuario" class="login username-field" maxlength="20" 
								   data-validation="length alphanumeric" data-validation-length="3-20"
								   data-validation-error-msg="Letras y/o números, de 3 a 20 caracteres">
						</div> <!-- /field -->
						<div class="field">
							<label for="password">Contraseña:</label>
							<input type="password" id="password" name="password" value="" placeholder="Contraseña" class="login password-field" maxlength="20"
								   data-validation="length" data-validation-length="min5"
								   data-validation-error-msg="Ingrese su contraseña">
						</div> <!-- /password -->
					</div> <!-- /login-fields -->
					
					<div class="login-actions">
						<button class="button btn btn-success btn-large">Entrar</button>
					</div> <!-- .actions -->
				</form>
			</div> <!-- /content -->
		</div> <!-- /account-container -->
@stop