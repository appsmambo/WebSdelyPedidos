<?php

class PedidosController extends BaseController {

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
			return Redirect::route('login');
		}
	}

	public function getPedidos()
	{
		$this->_titulo = 'Pedidos - ';
		$this->_menu = 'pedidos';
		$pedidos = Pedidos::where('estado', 1)->take(30)->skip(0)->orderBy('created_at', 'desc')->get();
		return View::make('admin.pedidos.listar')->with('titulo', $this->_titulo)
											->with('menu', $this->_menu)
											->with('pedidos', $pedidos);
	}

}