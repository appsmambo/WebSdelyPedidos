<?php
/*
 * Página: Nuevo Usuario
 */
?>

@extends('layouts.admin')
@section('estilos')
<style>
	.help-block.form-error {
		display:none
	}
</style>
@stop
@section('scripts')
<script src="{{url()}}/js/jquery.form-validator.min.js"></script>
<script src="{{url()}}/js/admin.usuario.js"></script>
@stop
@section('contenido')

<div class="row">
	<div class="span12">
		<div class="widget ">
			<div class="widget-header">
				<i class="icon-user"></i>
				<h3>Editar usuario</h3>
			</div>
			<div class="widget-content">
@if($mensaje != '')
				<div class="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Mensaje!</strong> {{$mensaje}}
				</div>
@endif
				<form action="{{url()}}/admin/usuarios/editar" method="post" name="usuarioEditar" id="usuarioEditar" class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label for="tipo" class="control-label">Tipo</label>
							<div class="controls">
								<select id="tipo" name="tipo" class="span6 form-control">
									<option value="1" {{ ($usuario->tipo == 1) ? 'selected' : '' }}>Administrador</option>
									<option value="2" {{ ($usuario->tipo == 2) ? 'selected' : '' }}>Centro Distribución</option>
									<option value="3" {{ ($usuario->tipo == 3) ? 'selected' : '' }}>Promotor(a)</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="usuario" class="control-label">Código *</label>
							<div class="controls">
								<input type="text" class="span6" id="usuario" name="usuario" data-validation="required length" data-validation-length="6-8" required maxlength="8" value="{{$usuario->usuario}}">
							</div>
						</div>
						<div class="control-group">
							<label for="password" class="control-label">Password *</label>
							<div class="controls">
								<input type="password" class="span6" id="password" name="password" data-validation="required" required value="000">
							</div>
						</div>
						<hr>
						<div class="control-group">
							<label for="first_name" class="control-label">Nombre *</label>
							<div class="controls">
								<input type="text" class="span6" id="first_name" name="first_name" data-validation="required" required value="{{$usuario->first_name}}">
							</div>
						</div>
						<div class="control-group">
							<label for="last_name" class="control-label">Apellido</label>
							<div class="controls">
								<input type="text" class="span6" id="last_name" name="last_name" value="{{$usuario->last_name}}">
							</div>
						</div>
						<div class="control-group">
							<label for="dni" class="control-label">DNI / RUC *</label>
							<div class="controls">
								<input type="tel" class="span6" id="dni" name="dni" data-validation="required length" data-validation-length="8-11" required maxlength="11" value="{{$usuario->dni}}">
							</div>
						</div>
						<div class="control-group">
							<label for="email" class="control-label">Correo electrónico</label>
							<div class="controls">
								<input type="email" class="span6" id="email" name="email" data-validation="email" value="{{$usuario->email}}">
							</div>
						</div>
						<div class="control-group">
							<label for="telefono" class="control-label">Teléfono</label>
							<div class="controls">
								<input type="text" class="span6" id="telefono" name="telefono" value="{{$usuario->telefono}}">
							</div>
						</div>
						<div class="control-group">
							<label for="direccion" class="control-label">Dirección</label>
							<div class="controls">
								<input type="text" class="span6" id="direccion" name="direccion" value="{{$usuario->direccion}}">
							</div>
						</div>
						<div class="control-group">
							<label for="distrito" class="control-label">Distrito</label>
							<div class="controls">
								<input type="text" class="span6" id="distrito" name="distrito" value="{{$usuario->distrito}}">
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Grabar</button>
							<a href="{{url()}}/admin/usuarios" class="btn">Cancelar</a>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

@stop