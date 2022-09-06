<?php 
namespace App\Models;

use CodeIgniter\Model;

class Categoria extends Model{
    protected $table      = 'categoria';
    protected $primaryKey ='ID_CATEGORIA';
    protected $allowedFields =['NOMBRE_CATEGORIA','DES_CATEGORIA'];
}