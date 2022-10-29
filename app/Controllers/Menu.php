<?php

namespace App\Controllers;
use App\Models\Categoria;
use CodeIgniter\Controller;
use App\Models\ModelMenu;

class Menu extends BaseController
{

    protected $request;

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

    public function get_producto_by_index_AJAX()
    {
        $modelMenu = new ModelMenu();
        $modelCategoria = new Categoria();
        $id_producto = $_POST['id'];

        $producto = $modelMenu->where('PRODUCTO_ID', $id_producto)->first();
        $categoria = $modelCategoria->where('ID_CATEGORIA', $producto["ID_CATEGORIA"])->first();

        $data = [
            "index" => $producto["PRODUCTO_ID"],
            "categoria" => $categoria["NOMBRE_CATEGORIA"],
            "nombre" => $producto["PRODUCTO_NOMBRE"],
            "descripcion" => $producto["descripcion"],
            "cantidad" => 1,
            "precio_unitario" => $producto["PRECIO_UNITARIO"],
            "foto" => $producto["foto"],
            "precio_total" => $producto["PRECIO_UNITARIO"]
        ];


        echo json_encode($data);
    }

}
