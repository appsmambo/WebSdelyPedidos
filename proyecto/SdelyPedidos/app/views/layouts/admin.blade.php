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
		<script src="{{url()}}/js/bootbox.min.js"></script>
		<script src="{{url()}}/js/excanvas.min.js"></script>
		<script src="{{url()}}/js/chart.min.js"></script>
		<script src="{{url()}}/js/bootstrap.js"></script>
		<script src="{{url()}}/js/full-calendar/fullcalendar.min.js"></script>
		<script src="{{url()}}/js/jquery.autocomplete.min.js"></script>
		<script src="{{url()}}/js/base.js"></script>
		<script src="{{url()}}/js/admin.js"></script>
		<script>
			var urlBase = '{{url()}}';
		</script>
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
		
		<div class="subnavbar">
			<div class="subnavbar-inner">
				<div class="container">
					<ul class="mainnav">
						<li class="{{ ($menu == 'inicio') ? 'active' : '' }}">
							<a href="{{url()}}/admin"><i class="icon-dashboard"></i><span>Inicio</span></a>
						</li>
						<li class="{{ ($menu == 'pedidos') ? 'active' : '' }}">
							<a href="{{url()}}/admin/listar-pedidos"><i class="icon-list-alt"></i><span>Ver Pedidos</span></a>
						</li>
						<li class="{{ ($menu == 'usuarios') ? 'active' : '' }}">
							<a href="{{url()}}/admin/usuarios"><i class="icon-group"></i><span>Ver Usuarios</span></a>
						</li>
						<li class="{{ ($menu == 'stock') ? 'active' : '' }}">
							<a href="{{url()}}/admin/importar-datos"><i class="icon-cogs"></i><span>::STOCK::</span></a>
						</li>
						<li class="">
							&nbsp;
						</li>
						<li style="float:right">
							<a href="{{url()}}/admin/salir"><i class="icon-signout"></i><span>salir</span></a>
						</li>
					</ul>
				</div><!-- /container --> 
			</div><!-- /subnavbar-inner --> 
		</div><!-- /subnavbar -->

		<div class="main">
			<div class="main-inner">
				<div class="container">
					@yield('contenido')
				</div><!-- /container --> 
			</div><!-- /main-inner --> 
		</div><!-- /main -->

		<div class="footer">
			<div class="footer-inner">
				<div class="container">
					<div class="row">
						<div class="span12"> &copy; 2015 <a href="#">mamboKings</a>. </div>
						<!-- /span12 --> 
					</div><!-- /row --> 
				</div><!-- /container --> 
			</div><!-- /footer-inner --> 
		</div><!-- /footer --> 

	</body>
</html>