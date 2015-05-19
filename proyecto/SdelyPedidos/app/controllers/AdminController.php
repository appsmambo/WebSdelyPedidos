<?php

class AdminController extends BaseController {

	private $_titulo = null;
	private $_user = null;
	private $_menu = null;
	
	public function __construct()
	{
		$this->_titulo = 'Acceso usuarios';
		$this->_menu = 'inicio';
		try
		{
			// Get the current active/logged in user
			$this->_user = Sentry::getUser();
			View::share('user', $this->_user);
			View::share('menu', $this->_menu);
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			// User wasn't found, should only happen if the user was deleted
			// when they were already logged in or had a "remember me" cookie set
			// and they were deleted.
		}
	}

	public function getLogin()
	{
		return View::make('login')->with('titulo', $this->_titulo);
	}
	
	public function getLogOut()
	{
		Sentry::logout();
		return Redirect::route('login');
	}
	
	public function postLogin()
	{
		$usuario = Input::get('usuario');
		
		$credentials = array(
			'usuario' => $usuario,
			'password' => Input::get('password')
		);

		try
		{
			$user = Sentry::authenticate($credentials, false);
			if ($user) {
				return Redirect::route('admin.index');
			}
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			return Redirect::route('login')
					->withErrors('Ingrese su usuario.');
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			return Redirect::route('login')
					->withErrors('Ingrese su contraseña.');
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
			return Redirect::route('login')
					->withErrors('Contraseña incorrecta, vuelva a intentar.');
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Redirect::route('login')
					->withErrors('No se encontró el usuario ['.$usuario.']');
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
			return Redirect::route('login')
					->withErrors('Usuario ['.$usuario.'] inactivo, no puede ingresar.');
		}
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
			return Redirect::route('login')
					->withErrors('Usuario ['.$usuario.'] está suspendido.');
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
			return Redirect::route('login')
					->withErrors('El usuario ['.$usuario.'] ha sido baneado.');
		}
		/*catch(\Exception $e)
		{
			return Redirect::route('login')
					->withErrors(array('login' => $e->getMessage()));
		}*/
	}
	
	public function getIndex()
	{
		$this->_titulo = 'Inicio - ';
		return View::make('admin.index')->with('titulo', $this->_titulo);
	}
	
	public function  getUsuarios()
	{
		$this->_titulo = 'Usuarios - ';
		$this->_menu = 'usuarios';
		$users = User::all();
		return View::make('admin.usuario.listar')->with('titulo', $this->_titulo)
											->with('menu', $this->_menu)
											->with('usuarios', $users);
	}

	public function getPerfil()
	{
		$this->_titulo = 'Mi perfil - ';
		$this->_menu = 'perfil';
		return View::make('admin.usuario.perfil')->with('titulo', $this->_titulo)
										->with('menu', $this->_menu);
	}
	
	public function getPedidos()
	{
		$this->_pagina = ' - Editar página INICIO';
		$paginaInicio = PaginaInicio::find(1);
		$datos = array();
		$datos['encabezado'] = explode('|', $paginaInicio->encabezado);
		$datos['queEs'][] = explode(';', $paginaInicio->que_es_1);
		$datos['queEs'][] = explode(';', $paginaInicio->que_es_2);
		$datos['queEs'][] = explode(';', $paginaInicio->que_es_3);
		$datos['queEs'][] = explode(';', $paginaInicio->que_es_4);
		$datos['queEs'][] = explode(';', $paginaInicio->que_es_5);
		$datos['queEs'][] = explode(';', $paginaInicio->que_es_6);
		$datos['mensaje'][] = $paginaInicio->mensaje;
		$datos['skills'][] = explode(';', $paginaInicio->skills_1);
		$datos['skills'][] = explode(';', $paginaInicio->skills_2);
		$datos['skills'][] = explode(';', $paginaInicio->skills_3);
		$datos['skills'][] = explode(';', $paginaInicio->skills_4);
		
		
		print_r($datos);exit;
		return View::make('admin.pagina-inicio')->with('pagina', $this->_pagina)
												->with('datos', $datos);
	}

}