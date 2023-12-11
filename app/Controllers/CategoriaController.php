<?php

namespace App\Controllers;

    use App\Models\CategoriaModel;

class CategoriaController extends BaseController
{

    private $categoriaModel;

    public function __construct() 
    {
        $this->categoriaModel = new CategoriaModel();
    }


    public function index()
    {
        $db = \Config\Database::connect();
        $categorias = $db->query('select * from categorias')
            ->getResultArray(); 

        $data = [
            'categorias' => $categorias
        ];

        return view('categorias/index', $data);
    }


    public function create()
    {
        return view('categorias/create');
    }


    public function store()
    {
        $data = [
            'nombre'        => $this->request->getPost('nombre'),
            'descripcion'   => $this->request->getPost('descripcion'),
            'status'        => $this->request->getPost('status  ')
        ];

        $this->categoriaModel->insert($data);

        return redirect()->to('categorias');

      
    }
}
   