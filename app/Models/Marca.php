<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $primaryKey = 'id_marca';
    protected $fillable = [
        'nombre',
        'logo_url'
    ];

    public $timestamps = false;

    // Relación uno a muchos
    public function productos(){
        return $this->hasMany(Producto::class, 'id_marca', 'id_marca');
    }
}
