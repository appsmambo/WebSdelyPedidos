<?php

class UbigeoController extends BaseController {

	public function postDistrito()
	{
		$distrito = trim(Input::get('query'));
		// consulta en 2 pasos
		// distritos que coinciden -> SELECT id_provincia, distrito FROM ubigeo_distrito WHERE distrito like '%san juan%' ORDER BY id_provincia
		$distritos = UbigeoDistrito::where('distrito', 'like', "%$distrito%")->get();
		$distrito = array();
		foreach($distritos as $data) {
			// SELECT d.departamento, p.provincia FROM ubigeo_departamento d, ubigeo_provincia p WHERE p.id = 127 AND d.id = p.id_departamento
			$distrito[] = array(
				'value' => $data->distrito,
				'data' => $data->id
				);
		}
		$result = array(
			'suggestions' => $distrito
		);
		return json_encode($result);
		
	}

}
