<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bebida;
use App\Models\Subcategoria;
use App\Models\categoria;
class Parrillas extends BaseController
{
    public function index()
    {
        $bedida = new Bebida();
        $datos['producto'] = $bedida->where("ID_CATEGORIA",1)->orderBy('PRODUCTO_ID', 'ASC')->findAll();
        $subcategorias = new Subcategoria();
        $datos['subcategoria'] = $subcategorias->where("ID_CATEGORIA",1)->orderBy('ID_SUBCAT', 'ASC')->findAll();

        $categorias = new categoria();
        $datos['categoria'] = $categorias->orderBy('ID_CATEGORIA', 'ASC')->findAll();
        echo view('header');
        echo view('parrillas',$datos);
        echo view('footer');
    }

}