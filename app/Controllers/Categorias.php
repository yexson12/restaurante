<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Categoria;
class Categorias extends Controller{
 /**
     * Instance of the main Request object.
     *
     * @var HTTP\IncomingRequest
     */
    protected $request;

    public function admin_cat()
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



        $categorias = new categoria();
        $datos['categoria'] = $categorias->findAll();
        echo view('admin/template/headadmin');
        echo view('admin/categoria/listar_cat', $datos);
        echo view('admin/template/footadmin');
    }



    public function crear_cat()
    {
       
     echo view('admin/template/headadmin');
        echo view('admin/categoria/crear_cat');
        echo view('admin/template/footadmin');
    }

    
    public function guardar_cat()
    {
        $categorias = new categoria();
        $NOMBRE_CATEGORIA = $this->request->getVar('NOMBRE_CATEGORIA');
        $DES_CATEGORIA = $this->request->getVar('DES_CATEGORIA');
        
      

            $datos = [
                'NOMBRE_CATEGORIA' => $this->request->getVar('NOMBRE_CATEGORIA'),
                'DES_CATEGORIA' => $this->request->getVar('DES_CATEGORIA')
            ];

            $categorias->insert($datos);
            return $this->response->redirect((site_url('/admin_cat')));
        
    }

    public function editar_cat($id = null)
    {


        $categorias = new categoria();
        $datos['categoria'] = $categorias->where('ID_CATEGORIA', $id)->first();
            
        echo view('admin/template/headadmin');
        echo view('admin/categoria/editar_cat',$datos);
        echo view('admin/template/footadmin');
    }

    public function actualizar_cat()
    {
        $categorias = new categoria();


        $datos = [
            'NOMBRE_CATEGORIA' => $this->request->getVar('NOMBRE_CATEGORIA'),
            'DES_CATEGORIA' => $this->request->getVar('DES_CATEGORIA')
            
        ];

        $id = $this->request->getVar('ID_CATEGORIA');
        $categorias->update($id, $datos);
       
        return $this->response->redirect((site_url('/admin_cat')));
    }

        public function borrar_cat($id = null)
    {
        $categorias = new categoria();
        $datosproducto = $categorias->where('ID_CATEGORIA', $id)->first();

        $categorias->where('ID_CATEGORIA', $id)->delete($id);
        return $this->response->redirect((site_url('/admin_cat')));
    }


}