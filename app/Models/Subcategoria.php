<?php 
namespace App\Models;

use CodeIgniter\Model;

class Subcategoria extends Model{
    protected $table      = 'subcategoria';
    protected $primaryKey ='ID_SUBCAT';
    protected $allowedFields =['ID_CATEGORIA','NOMBRE_SUBCAT'];


}