@extends('layouts.inicio')
@section('contenido')
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="error-container">
						<h1>404</h1>
						<h2>
							Chispas! no he encontrado la página que ingresaste:<br>
							<small>
								{{$url}}
							</small>
						</h2>
						<div class="error-details">
							Lo sentimos, estas cosas pasan! Puedes regresar a <a href="{{url()}}"><strong>inicio</strong></a> y continuar!
						</div> <!-- /error-details -->
						<div class="error-actions">
							<a href="{{URL::previous()}}" class="btn btn-large btn-primary">
								<i class="icon-chevron-left"></i>
								&nbsp;
								Regresar
							</a>
						</div> <!-- /error-actions -->
					</div> <!-- /error-container -->			
				</div> <!-- /span12 -->
			</div> <!-- /row -->
		</div> <!-- /container -->
@stop