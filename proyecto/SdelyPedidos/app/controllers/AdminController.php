<?php

class AdminController extends BaseController {

	private $_login = null;
	private $_pagina = null;
	
	public function __construct()
	{
		$this->_login = false;
		$this->_pagina = '';
	}

	public function getIndex()
	{
		$this->_pagina = ' - Inicio';
		return View::make('admin.index')->with('pagina', $this->_pagina);
	}
	
	public function getLogin()
	{
		$this->_login = true;
		$this->_pagina = ' - Login';
		return View::make('login')->with('pagina', $this->_pagina)
										->with('login', $this->_login);
	}
	
	public function getLogOut()
	{
		$this->_login = true;
		$this->_pagina = ' - Login';
		Sentry::logout();
		return View::make('admin.login')->with('pagina', $this->_pagina)
										->with('login', $this->_login);
	}
	
	public function postLogin()
	{
		$credentials = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		try
		{
			$user = Sentry::authenticate($credentials, false);
			if ($user) {
				return Redirect::route('admin.index');
			}
		}
		catch(\Exception $e)
		{
			return Redirect::route('login')
					->withErrors(array('login' => $e->getMessage()));
		}
	}
	
	public function getPaginasInicio()
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