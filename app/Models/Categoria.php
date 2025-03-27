<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'imagen_url'
    ];

    public $timestamps = false;

    // Relación uno a muchos
    public function subcategorias(){
        return $this->hasMany(SubCategoria::class, 'id_categoria', 'id_categoria');
    }
}
