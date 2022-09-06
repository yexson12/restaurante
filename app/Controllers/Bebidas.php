<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bebida;
use App\Models\Subcategoria;
class Bebidas extends BaseController
{
     /**
     * Instance of the main Request object.
     *
     * @var HTTP\IncomingRequest
     */
    protected $request;

    public  function index()
    {
        $bedida = new Bebida();
        
        $subcategorias = new Subcategoria();

        $datos['producto'] = $bedida->where("ID_CATEGORIA",1)->orderBy('PRODUCTO_ID', 'ASC')->findAll();
        $datos['subcategoria'] = $subcategorias->where("ID_CATEGORIA",1)->orderBy('ID_SUBCAT', 'ASC')->findAll();
        echo view('header');
        echo view('bebidas',$datos);
        echo view('footer');
    }


}