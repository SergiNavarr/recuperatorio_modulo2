<?php
namespace App\Models;
use CodeIgniter\Model;

class producto_model extends Model 
{
	protected $table = 'productos';
	protected $primaryKey = 'id_producto';
	protected $allowedFields =['nombre', 'precio', 'sucursal_id','stock'];
}