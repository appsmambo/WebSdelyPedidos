<?php

class ProductosController extends BaseController {

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

	public function getStock()
	{
		$this->_titulo = 'Stock - ';
		$this->_menu = 'stock';
		return View::make('admin.productos.stock')->with('titulo', $this->_titulo)
											->with('menu', $this->_menu);
	}
	
	public function postStock()
	{
		$this->_titulo = 'Stock - ';
		$this->_menu = 'stock';
		$total = 0;
		if (Input::hasFile('archivo')) {
			Productos::truncate();
			$archivo = Input::file('archivo');
			$productos = $this->csvToArray($archivo);
			Productos::insert($productos);
			$total = Productos::count();
		}
		return View::make('admin.productos.stock')->with('titulo', $this->_titulo)
											->with('menu', $this->_menu)
											->with('total', $total);
	}
	
	private function csvToArray($filename = '', $delimiter = ',')
	{
		if(!file_exists($filename) || !is_readable($filename))
			return FALSE;

		$header = NULL;
		$data = array();
		if (($handle = fopen($filename, 'r')) !== FALSE)
		{
			while (($row = fgetcsv($handle, 0, $delimiter)) !== FALSE)
			{
				if(!$header)
					$header = $row;
				else {
					$catalogo = $row[0];
					$row[0] = utf8_encode($catalogo);
					$marca = $row[2];
					$row[2] = utf8_encode($marca);
					$color = $row[4];
					$row[4] = utf8_encode($color);
					$data[] = array_combine($header, $row);
				}
			}
			fclose($handle);
		}
		return $data;
	}

}