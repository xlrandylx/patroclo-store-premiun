<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'id_proveedor';
    protected $fillable = [
        'nombre_comercial',
    ];

    public $timestamps = false;

    // Relación uno a muchos
    public function productos(){
        return $this->hasMany(Producto::class, 'id_proveedor', 'id_proveedor');
    }
}
