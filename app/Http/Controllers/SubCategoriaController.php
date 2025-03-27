<?php

namespace App\Http\Controllers;
use App\Models\SubCategoria;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    public function obtenerSubcategorias($id) {
        $subcategorias = SubCategoria::where('id_categoria', $id)->get();
        return view('subcategorias', compact('subcategorias'));
    }
}

