<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Bebida;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Config\Services;
class Producto extends BaseController
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
        echo view('bebidas', $datos);
        echo view('footer');
    }

    public function admin_pro()
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
        $bedida = new Bebida();
        $datos['producto'] = $bedida->join('categoria','categoria.ID_CATEGORIA=producto.ID_CATEGORIA')->join('subcategoria','subcategoria.ID_SUBCAT=producto.ID_SUBCAT')->orderBy('PRODUCTO_ID', 'DESC')->findAll();
        echo view('admin/template/headadmin');
        echo view('admin/producto/listar', $datos);
        echo view('admin/template/footadmin');
    }



    public function admin_general()
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
        $bedida = new Bebida();
        $datos['producto'] = $bedida->where('estado', 1)->findAll();
        echo view('admin/template/headadmin');
        echo view('admin/admin', $datos);
        echo view('admin/template/footadmin');
    }
    public function crear_pro()
    {
        $categorias = new categoria();
        $subcategorias = new subcategoria();
        $datos['subcategoria'] = $subcategorias->orderBy('ID_SUBCAT', 'ASC')->findAll();
        $datos['categoria'] = $categorias->orderBy('ID_CATEGORIA', 'ASC')->findAll();
        echo view('admin/template/headadmin');
        echo view('admin/producto/crear', $datos);
        echo view('admin/producto/foot');
    
    }

    public function guardar_pro()
    {
        $bedida = new Bebida();
        $PRODUCTO_NOMBRE = $this->request->getVar('PRODUCTO_NOMBRE');
        $descripcion = $this->request->getVar('descripcion');
        $PRECIO_UNITARIO = $this->request->getVar('PRECIO_UNITARIO');
        $STOCK = $this->request->getVar('STOCK');
        $ID_CATEGORIA = $this->request->getVar('ID_CATEGORIA');
        $ID_SUBCAT = $this->request->getVar('ID_SUBCAT');


        if ($foto = $this->request->getFile('foto')) {
            $nuevoNombre = $foto->getRandomName();
            $foto->move('public/uploads/', $nuevoNombre);
            $datos = [
                'PRODUCTO_NOMBRE' => $this->request->getVar('PRODUCTO_NOMBRE'),
                'descripcion' => $this->request->getVar('descripcion'),
                'PRECIO_UNITARIO' => $this->request->getVar('PRECIO_UNITARIO'),
                'STOCK' => $this->request->getVar('STOCK'),
                'ID_CATEGORIA' => $this->request->getVar('ID_CATEGORIA'),
                'ID_SUBCAT' => $this->request->getVar('ID_SUBCAT'),

                'foto' => $nuevoNombre

            ];

            $bedida->insert($datos);
            return $this->response->redirect((site_url('/admin_pro')));
        }
    }

    public function borrar_pro($id = null)
    {
        $bebida = new Bebida();
        $datosproducto = $bebida->where('PRODUCTO_ID', $id)->first();


        $ruta = ('public/uploads/' . $datosproducto['foto']);
        unlink($ruta);
        $bebida->where('PRODUCTO_ID', $id)->delete($id);
        return $this->response->redirect((site_url('/admin_pro')));
    }



    public function editar_pr($id = null)
    {
        $categorias = new categoria();
        $subcategorias = new subcategoria();
        $datos['subcategoria'] = $subcategorias->orderBy('ID_SUBCAT', 'ASC')->findAll();
        $datos['categoria'] = $categorias->orderBy('ID_CATEGORIA', 'ASC')->findAll();
        $conexion = mysqli_connect('localhost', 'root', '', 'bd_restaurante');
        $sql = "CALL splistarproducto";
        $result = mysqli_query($conexion, $sql);
        $ver = mysqli_fetch_row($result);
        $ver['0']=$id;

        $bebida = new Bebida();
        $datos['ver'] = $ver ;
 
        $datos['bebida'] = $bebida->where('PRODUCTO_ID', $id)->first();
    
        echo view('admin/producto/editar', $datos);
        echo view('admin/template/footadmin');
    }

    
    public function editar_pro($id = null)
    {
        $categorias = new categoria();
        $subcategorias = new subcategoria();
        $datos['subcategoria'] = $subcategorias->orderBy('ID_SUBCAT', 'ASC')->findAll();
        $datos['categoria'] = $categorias->orderBy('ID_CATEGORIA', 'ASC')->findAll();
      
        $bebida = new Bebida();
        $datos['bebida'] = $bebida->where('producto.PRODUCTO_ID', $id)->first();




        echo view('admin/template/headadmin');
        echo view('admin/producto/editar', $datos);
        echo view('admin/template/footadmin');
    }


    public function actualizar_pro()
    {
        $bedida = new Bebida();


        $datos = [
            'PRODUCTO_NOMBRE' => $this->request->getVar('PRODUCTO_NOMBRE'),
            'descripcion' => $this->request->getVar('descripcion'),
            'PRECIO_UNITARIO' => $this->request->getVar('PRECIO_UNITARIO'),
            'STOCK'  => $this->request->getVar('STOCK'),
            'ID_CATEGORIA'  => $this->request->getVar('ID_CATEGORIA'),
            'ID_SUBCAT'  => $this->request->getVar('ID_SUBCAT'),
            'ESTADO'  => $this->request->getVar('ESTADO')

        ];

        $id = $this->request->getVar('PRODUCTO_ID');
        $bedida->update($id, $datos);
        $validacion = $this->validate(
            [
                'foto' => [
                    'uploaded[foto]',
                    'mime_in[foto,image/jpg,image/jpeg,image/png]',
                    'max_size[foto,1024]',
                ]
            ]
        );

        if ($validacion) {
            if ($imagen = $this->request->getFile('foto')) {

                $bedida = new Bebida();
                $datosproducto = $bedida->where('PRODUCTO_ID', $id)->first();


                $ruta = ('public/uploads/' . $datosproducto['foto']);
                unlink($ruta);


                $nuevoNombre = $imagen->getRandomName();
                $imagen->move('public/uploads/', $nuevoNombre);
                $datos = ['foto' => $nuevoNombre];


                $bedida->update($id, $datos);
            }
        }

        return $this->response->redirect((site_url('/admin_pro')));
    }


    public function uploadFile()
	{
        $bedida = new Bebida();

		$validationRule = [
            'productfile' => [
                'label' => 'Upload files',
                'rules' => 'uploaded[productfile]|max_size[productfile,2000]|mime_in[productfile,image/jpg,image/pjpeg,image/jpeg,image/png]'
            ],
        ];

        if (!$this->validate($validationRule)) {
            $response = ['type' => "error", 'message' => $this->validator->getError()];
			echo json_encode($response);
        } else {
			$session = Services::session();
			$file = $this->request->getFile('productfile');
			$idUser = $session->get('idProduct');
			$name = hash('haval128,5', $idUser).'.'.$file->getClientExtension();

			$file->move('./assets/img/product', $name, true);
			$bedida->createProduct($idUser, ['picture' => base_Url('assets/img/product/'.$name)]);

			$response = ['type' => "success", 'message' => "El archivo se subió correctamente."];
			echo json_encode($response);
		}
	}


    
    public function actualizar_estado()
    {
        $bedida = new Bebida();


        $datos = [
            'ESTADO'  => $this->request->getVar('ESTADO')

        ];

        $id = $this->request->getVar('PRODUCTO_ID');
        $bedida->update($id, $datos);
       
        return $this->response->redirect((site_url('/admin_pro')));
    }




}
