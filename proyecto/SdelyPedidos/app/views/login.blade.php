@extends('layouts.inicio')
@section('scripts')
		<script src="{{url()}}/js/signin.js"></script>
@stop
@section('contenido')
		<div class="account-container">
			<div class="content clearfix">

				<form action="#" method="post">
					<h1>Acceso usuarios</h1>

					<div class="login-fields">
						<p>Ingrese sus credenciales</p>
						<div class="field">
							<label for="username">Usuario:</label>
							<input type="text" id="username" name="username" value="" placeholder="Usuario" class="login username-field">
						</div> <!-- /field -->
						<div class="field">
							<label for="password">Contraseña:</label>
							<input type="password" id="password" name="password" value="" placeholder="Contraseña" class="login password-field">
						</div> <!-- /password -->
					</div> <!-- /login-fields -->
					
					<div class="login-actions">
						<button class="button btn btn-success btn-large">Entrar</button>
					</div> <!-- .actions -->
				</form>
			</div> <!-- /content -->
		</div> <!-- /account-container -->
@stop