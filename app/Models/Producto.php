<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'id_subcategoria',
        'id_marca',
        'id_proveedor',
        'nombre',
        'descripcion',
        'especificaciones',
        'precio_dolares',
        'stock',
        'codigo',
        'imagen_url',
        'informacion_fabricante_url'
    ];

    public $timestamps = false;

    // Relación uno a muchos inversa
    public function subcategoria(){
        return $this->belongsTo(SubCategoria::class, 'id_subcategoria', 'id_subcategoria');
    }

    // Relación uno a muchos inversa
    public function marca(){
        return $this->belongsTo(Marca::class, 'id_marca', 'id_marca');
    }

    // Relación uno a muchos inversa
    public function proveedor(){
        return $this->belongsTo(Proveedor::class, 'id_proveedor', 'id_proveedor');
    }

    // Relación uno a muchos
    public function imagenes(){
        return $this->hasMany(ProductoImagen::class, 'id_producto', 'id_producto');
    }
}
