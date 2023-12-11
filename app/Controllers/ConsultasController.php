<?php

namespace App\Controllers;

class ConsultasController extends BaseController
{
    
	public function index()
	{
		$db = \Config\Database::connect();
		$noticias = $db->query('select * from news')->getResultArray();

		$titulo = 'Consultar todos los resgistros de noticias';
		
		$data = [
			'noticias'	=> $noticias,
			'titulo'	=> $titulo
		];
		
		// dd($data);
		return view('consultas/index', $data);
	}

}