<?php 
namespace App\Models;

use CodeIgniter\Model;

class Bebida extends Model{
    protected $table      = 'producto';
    protected $primaryKey ='PRODUCTO_ID';
    protected $allowedFields =['PRODUCTO_NOMBRE','descripcion','PRECIO_UNITARIO','STOCK','ID_CATEGORIA','ID_SUBCAT','foto','ESTADO'];
}