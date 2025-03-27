@extends('layouts.app')

@section('content')
    <h1 class="text-center text-gray-800 text-2xl font-medium">Elige una Subcategoría</h1>

    <div class="flex flex-wrap justify-evenly mt-4 gap-4">
        @foreach($subcategorias as $subcategoria)
        <a href="{{ route('productos.obtener', $subcategoria->id_subcategoria) }}" class="subcategoria">
            <div class="bg-gray-200 hover:bg-gray-300 w-[300px] h-[265px] p-4 rounded">
                <img class="h-[180px] w-full object-cover rounded" src="{{ $subcategoria->imagen_url }}" alt="">
                <p class="text-center mt-3 font-medium text-gray-800">{{ $subcategoria->nombre }}</p>
            </div>
        @endforeach
    </div>
@endsection