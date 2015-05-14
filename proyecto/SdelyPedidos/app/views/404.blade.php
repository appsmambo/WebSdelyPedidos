<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>404 - Sistema de Pedidos</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes"> 

		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url()}}/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

		<link href="{{url()}}/css/font-awesome.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

		<link href="{{url()}}/css/style.css" rel="stylesheet" type="text/css">
		<link href="{{url()}}/css/pages/signin.css" rel="stylesheet" type="text/css">
	</head>
	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="{{url()}}">
						Sistema de Pedidos v1.0
					</a>		
					<div class="nav-collapse">
						<ul class="nav pull-right">
							<li class="">						
								<a href="https://www.facebook.com/SdelyCatalogos?fref=ts" class="" target="_blank">
									<i class="icon-facebook-sign"></i>
									&nbsp;
									visitanos en FB
								</a>
							</li>
						</ul>
					</div><!--/.nav-collapse -->	
				</div> <!-- /container -->
			</div> <!-- /navbar-inner -->
		</div> <!-- /navbar -->

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

		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>