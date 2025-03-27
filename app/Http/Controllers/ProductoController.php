<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function obtenerProductos($id) {
        $productos = Producto::where('id_subcategoria', $id)->get();
        return view('productos', compact('productos'));
    }

    public function detalle($id) {
        $producto = Producto::with(['marca','proveedor','imagenes'])->findOrFail($id);
        return view('productos-detalle', compact('producto'));
    }
}
