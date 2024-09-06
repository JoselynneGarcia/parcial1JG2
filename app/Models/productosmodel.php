<?php
namespace App\Models;
use CodeIgniter\Model;

class Productosmodel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'producto_id'; 

    protected $allowedFields = ['nombre', 'descripcion', 'cantidad_existencia', 'fecha_vencimiento', 'tipo_producto_id'];

    
}
?>