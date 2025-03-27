<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoImagen extends Model
{
    protected $table = 'producto_imagenes';
    protected $primaryKey = 'id_producto_imagen';
    protected $fillable = [
        'id_producto',
        'imagen_url'
    ];

    public $timestamps = false;

    // Relación uno a muchos inversa
    public function producto(){
        return $this->belongsTo(Producto::class, 'id_producto', 'id_producto');
    }
}
