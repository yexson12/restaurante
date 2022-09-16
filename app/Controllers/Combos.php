<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Categoria;
class Combos extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var HTTP\IncomingRequest
     */
    protected $request;


    public function entrarcombo()
    {  $categorias = new categoria();
     
        $datos['categoria'] = $categorias->orderBy('ID_CATEGORIA', 'ASC')->findAll();
   
        echo view('header');

         echo view('combo', $datos);
         echo view('footer');
    }


    public function combo()
    { 
        $conexion=mysqli_connect('localhost','root','1234','bd_restaurante');
        $continente=$_POST['continente'];
        
            $sql="SELECT * FROM subcategoria where ID_CATEGORIA='$continente'";
        
            $result=mysqli_query($conexion,$sql);
        
            $cadena="
                    <select class='form-control' id='ID_SUBCAT' name='ID_SUBCAT'>
                    ";
        
            while ($ver=mysqli_fetch_row($result)) {
                $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
            }
        
            echo  $cadena."</select>";
        
        
    }
    
    public function combo_subcategoria()
    { 
        $conexion=mysqli_connect('localhost','root','1234','bd_restaurante');
        $continente=$_POST['continente'];
        
            $sql="SELECT * FROM subcategoria where ID_CATEGORIA='$continente'";
        
            $result=mysqli_query($conexion,$sql);
        
            $cadena="
                    <select class='form-control' id='ID_SUBCAT' name='ID_SUBCAT'>
                    ";
        
            while ($ver=mysqli_fetch_row($result)) {
                $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
            }
        
            echo  $cadena."</select>";
        
        
    }




}