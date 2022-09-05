<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bebida;
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
        $datos['producto'] = $bedida->orderBy('PRODUCTO_ID', 'ASC')->findAll();
        echo view('header');
        echo view('bebidas',$datos);
        echo view('footer');
    }

}