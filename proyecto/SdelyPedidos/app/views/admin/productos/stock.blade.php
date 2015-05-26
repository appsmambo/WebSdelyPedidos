<?php
/*
 * Página: Lista de usuarios
 */
?>

@extends('layouts.admin')
@section('estilos')
@stop
@section('scripts')
@stop
@section('contenido')

<div class="row">
	<div class="span12">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-user"></i>
				<h3>
					Actualizar el Stock
				</h3>
			</div> <!-- /widget-header -->
			<div class="widget-content">
@if (isset($total))
				<div class="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Aviso!</strong> {{$total}} registros insertados.
				</div>
@endif
				<form action="{{url()}}/admin/stock" method="post" enctype="multipart/form-data" id="edit-profile" class="form-horizontal">
					<fieldset>
						<div class="control-group">											
							<label class="control-label" for="archivo">Subir archivo</label>
							<div class="controls">
								<input type="file" class="span6" id="archivo" name="archivo">
							</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Procesar</button>
						</div> <!-- /form-actions -->
					</fieldset>
				</form>
				
			</div>
		</div>
	</div>
</div>
@stop