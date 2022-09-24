<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bebida;
use App\Models\Subcategoria;
use App\Models\categoria;
class Platos extends BaseController
{
    public function index()
    {      $bedida = new Bebida();
        $datos['producto'] = $bedida->where("ID_CATEGORIA",3)->where( "ESTADO",1)->orderBy('PRODUCTO_ID', 'ASC')->findAll();

        $subcategorias = new Subcategoria();
        $datos['subcategoria'] = $subcategorias->where("ID_CATEGORIA",3)->orderBy('ID_SUBCAT', 'ASC')->findAll();
        echo view('header');
        echo view('platos', $datos);
        echo view('footer');
    }

    public function platogeneral($id = null)
    {      $bedida = new Bebida();
        $datos['producto'] = $bedida->where("ID_CATEGORIA",$id)->where( "ESTADO",1)->orderBy('PRODUCTO_ID', 'DESC')->findAll();
        $categoria = new categoria();

        $datos['categoria'] = $categoria->where('ID_CATEGORIA', $id)->first();

        $subcategorias = new Subcategoria();
        $datos['subcategoria'] = $subcategorias->where("ID_CATEGORIA",$id)->orderBy('ID_SUBCAT', 'ASC')->findAll();
        echo view('header');
        echo view('platos', $datos);
        echo view('footer');
    }


}
