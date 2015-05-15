<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{{$titulo}}Sistema de Pedidos v1.0</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="{{url()}}/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<link href="{{url()}}/css/font-awesome.css" rel="stylesheet">
		<link href="{{url()}}/css/style.css" rel="stylesheet" type="text/css">
		<link href="{{url()}}/css/pages/dashboard.css" rel="stylesheet" type="text/css">
@yield('estilos')
		<!-- HTML5 shim -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="{{url()}}/js/jquery-1.7.2.min.js"></script>
		<script src="{{url()}}/js/excanvas.min.js"></script>
		<script src="{{url()}}/js/chart.min.js"></script>
		<script src="{{url()}}/js/bootstrap.js"></script>
		<script src="{{url()}}/js/full-calendar/fullcalendar.min.js"></script>
		<script src="{{url()}}/js/base.js"></script>
@yield('scripts')
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
					<a class="brand" href="{{url()}}/admin">Sistema de Pedidos v1.0</a>
					<div class="nav-collapse">
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-user"></i> {{$user->first_name}} <b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="{{url()}}/admin/perfil-usuario">Mi perfil</a></li>
									<li><a href="{{url()}}/admin/salir">Salir</a></li>
								</ul>
							</li>
						</ul>
						<form class="navbar-search pull-right">
							<input type="text" class="search-query" placeholder="Buscar pedido">
						</form>
					</div><!--/.nav-collapse --> 
				</div><!-- /container --> 
			</div><!-- /navbar-inner --> 
		</div><!-- /navbar -->
@yield('contenido')

	</body>
</html>