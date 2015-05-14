<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Acceso usuarios</title>

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

		<script src="{{url()}}/js/jquery-1.7.2.min.js"></script>
		<script src="{{url()}}/js/bootstrap.js"></script>
		<script src="{{url()}}/js/signin.js"></script>
	</body>
</html>