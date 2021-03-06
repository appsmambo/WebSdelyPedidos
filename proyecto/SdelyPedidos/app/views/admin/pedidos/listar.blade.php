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
					Últimos pedidos
				</h3>
			</div> <!-- /widget-header -->
			<div class="widget-content">
				
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th> Usuario </th>
							<th> Tipo </th>
							<th class="td-actions">
								<button class="btn btn-info pull-right">Buscar</button>
								<button class="btn btn-success pull-right">Nuevo</button>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> CDCHIMBOTE </td>
							<td> CENTRO </td>
							<td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
						</tr>
						<tr>
							<td> CDHUARAL </td>
							<td> CENTRO </td>
							<td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
						</tr>
						<tr>
							<td> KAREN RUÍZ GALLO </td>
							<td> PROMOTORA </td>
							<td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
						</tr>
						<tr>
							<td> CDANTA </td>
							<td> CENTRO </td>
							<td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
						</tr>
						<tr>
							<td> CDAYACUCHO </td>
							<td> CENTRO </td>
							<td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
						</tr>
						<tr>
							<td> admin </td>
							<td> ADMINISTRADOR </td>
							<td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop