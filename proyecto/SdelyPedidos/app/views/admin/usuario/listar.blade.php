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
					Lista de usuarios
				</h3>
			</div> <!-- /widget-header -->
			<div class="widget-content">
@if($mensaje != '')
				<div class="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Mensaje!</strong> {{$mensaje}}
				</div>
@endif
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th> Usuario </th>
							<th> Tipo </th>
							<th> Email </th>
							<td>
								<!--a href="#" class="btn btn-info pull-right">Buscar</a-->
								<a href="{{url()}}/admin/usuarios/nuevo" class="btn btn-small btn-success">Nuevo Usuario <i class="btn-icon-only icon-plus-sign-alt"> </i></a>
							</td>
						</tr>
					</thead>
					<tbody>
@foreach ($usuarios as $user)
						<tr>
							<td>{{$user->usuario}}</td>
							<td>
@if($user->tipo == 1)
								{{'ADMIN'}}
@elseif($user->tipo == 2)
								{{'CENTRO'}}
@elseif($user->tipo == 3)
								{{'PROMOTORA'}}
@endif
							</td>
							<td>
								{{$user->email}}
							</td>
							<td class="td-actions">
@if($user->activated == 1)
								<a href="{{url()}}/admin/usuarios/editar/{{$user->id}}" class="btn btn-small btn-info">Editar <i class="btn-icon-only icon-pencil"> </i></a>
@endif
@if($user->tipo != 1)
@if($user->activated == 1)
								<a href="#" data-url="/admin/usuarios/bloquear/{{$user->id}}" data-usuario="{{$user->usuario}}" class="eliminarUsuario btn btn-small btn-danger">Bloquear <i class="btn-icon-only icon-thumbs-down"> </i></a>
@elseif($user->activated == 0)
								<a href="#" data-url="/admin/usuarios/activar/{{$user->id}}" data-usuario="{{$user->usuario}}" class="activarUsuario btn btn-small btn-warning">Activar <i class="btn-icon-only icon-thumbs-up"> </i></a>
@endif
@endif
							</td>
						</tr>
@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th> Usuario </th>
							<th> Tipo </th>
							<th> Email </th>
							<td>
								<!--a href="#" class="btn btn-info pull-right">Buscar</a-->
								<a href="{{url()}}/admin/usuarios/nuevo" class="btn btn-small btn-success">Nuevo Usuario <i class="btn-icon-only icon-plus-sign-alt"> </i></a>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
@stop