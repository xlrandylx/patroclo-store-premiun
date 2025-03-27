@extends('layouts.app')


@section('content')
<h1 class="text-center text-gray-800 text-2xl font-medium">Elige una Categoría</h1>

<div class="flex flex-wrap justify-evenly mt-4 gap-4">

    @foreach($categorias as $categoria)
    <a href="{{ route('subcategorias.obtener', $categoria->id_categoria) }}" class="categoria">
        <div class="bg-gray-200 hover:bg-gray-300 w-[300px] h-[250px] p-4 rounded">
            <img class="h-[180px] w-full object-cover rounded" src="{{ $categoria->imagen_url }}" alt="">
            <p class="text-center mt-3 font-medium text-gray-800">{{ $categoria->nombre }}</p>
        </div>
    </a>
    @endforeach
</div>

@endsection