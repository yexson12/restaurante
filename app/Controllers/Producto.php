<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Bebida;
use App\Models\Categoria;
use App\Models\Subcategoria;
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
        $bedida = new Bebida();
        $datos['producto'] = $bedida->where('estado',1)->findAll();

       





        echo view('header');
        echo view('admin/listar', $datos);
        echo view('footer');
    }
    public function crear_pro()
    {
        $categorias = new categoria();
        $subcategorias = new subcategoria();
        $datos['subcategoria'] = $subcategorias->orderBy('ID_SUBCAT', 'ASC')->findAll();
        $datos['categoria'] = $categorias->orderBy('ID_CATEGORIA', 'ASC')->findAll();
        echo view('header');
        echo view('admin/crear', $datos);
        echo view('footer');
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



    public function editar_pro($id = null)
    {


        $bebida = new Bebida();
        $datos['bebida'] = $bebida->where('PRODUCTO_ID', $id)->first();
        echo view('header');
        echo view('admin/editar', $datos);
        echo view('footer');
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
              

                $bedida->update($id,$datos);
               
            }
        }

        return $this->response->redirect((site_url('/admin_pro')));
    }
}