<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Subcategoria;

use App\Models\categoria;

class Subcategorias extends Controller
{

    /**
     * Instance of the main Request object.
     *
     * @var HTTP\IncomingRequest
     */
    protected $request;

    public function admin_subcat()
    {
        session_start();
        if (!isset($_SESSION['usuario'])) {
            echo '
        <script>
        window.location =  "../index.php";
        </script>';
            session_destroy();
            exit();
        }


        $subcategorias = new Subcategoria();
        $datos['subcategoria'] = $subcategorias->orderBy('ID_SUBCAT', 'DESC')->findAll();
        echo view('admin/template/headadmin');

        echo view('admin/subcategoria/listar_subcat', $datos);
        echo view('admin/template/footadmin');
    }

    public function crear_subcat()
    {
        $categorias = new categoria();
        $datos['categoria'] = $categorias->findAll();

        echo view('admin/template/headadmin');
        echo view('admin/subcategoria/crear_subcat',$datos);
        echo view('admin/template/footadmin');
    }


    public function guardar_subcat()
    {
        $subcategorias = new Subcategoria();
        $ID_CATEGORIA = $this->request->getVar('ID_CATEGORIA');
        $NOMBRE_SUBCAT = $this->request->getVar('NOMBRE_SUBCAT');


        $datos = [
            'ID_CATEGORIA' => $this->request->getVar('ID_CATEGORIA'),
            'NOMBRE_SUBCAT' => $this->request->getVar('NOMBRE_SUBCAT')
        ];

        $subcategorias->insert($datos);
        return $this->response->redirect((site_url('/admin_subcat')));
    }

    public function editar_subcat($id = null)
    {        $categorias = new categoria();

  
        $datos['categoria'] = $categorias->findAll();
        $subcategorias = new subcategoria();
        $datos['subcategoria'] = $subcategorias->where('subcategoria.ID_SUBCAT', $id)->first();


        echo view('admin/template/headadmin');
        echo view('admin/subcategoria/editar_subcat', $datos);
        echo view('admin/template/footadmin');
    }

    public function actualizar_subcat()
    {
        $subcategorias = new Subcategoria();

        $datos = [
            'ID_CATEGORIA' => $this->request->getVar('ID_CATEGORIA'),
            'NOMBRE_SUBCAT' => $this->request->getVar('NOMBRE_SUBCAT')
        ];

        $id = $this->request->getVar('ID_SUBCAT');
        $subcategorias->update($id,$datos);
        return $this->response->redirect((site_url('/admin_subcat')));
    }





    public function borrar_subcat($id = null)
    {
        $subcategorias = new Subcategoria();


        $subcategorias->where('ID_SUBCAT', $id)->delete($id);
        return $this->response->redirect((site_url('/admin_subcat')));
    }
}
