<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Categoria;
class Menu extends BaseController
{
    public function index()
    {
        $categorias = new categoria();
        $datos['categoria'] = $categorias->orderBy('ID_CATEGORIA', 'ASC')->findAll();
        
        echo view('header');
        echo view('subcategorias');
        echo view('footer');
    }
    public function headactivate()
    {
        $categorias = new categoria();
        $datos['categoria'] = $categorias->orderBy('ID_CATEGORIA', 'ASC')->findAll();
        
        echo view('header');
        echo view('subcategorias');
        echo view('footer');
       
    }

    

}
