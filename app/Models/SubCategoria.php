<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $table = 'subcategorias';
    protected $fillable = [
        'id_categoria',
        'nombre',
        'imagen_url'
    ];

    public $timestamps = false;

    // Relación uno a muchos inversa
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }

    // Relación uno a muchos
    public function productos(){
        return $this->hasMany(Producto::class, 'id_subcategoria', 'id_subcategoria');
    }
}
