@extends('layouts.app')

@section('content')
    <h1 class="text-center text-gray-800 text-2xl font-medium">Productos</h1>

    <div class="flex flex-wrap justify-evenly mt-4 gap-4">
        @foreach($productos as $producto)
        <a href="{{ route('productos.detalle', $producto->id_producto) }}">
            <div class="bg-gray-200 hover:bg-gray-300 w-[300px] h-[350px] p-4 rounded">
                <img class="h-[150px] w-full object-cover my-2" src="{{ $producto->imagen_url }}" alt="Imagen del producto">
                <p class="text-gray-800 font-semibold text-lg mt-2">{{ $producto->nombre }}</p>
                <p class="text-gray-700 text-sm">Código: <span class="font-bold">{{ $producto->codigo }}</span></p>
                <p class="text-green-500 font-bold text-lg mt-2">{{ $producto->precio_dolares }}</p>
                <p class="text-gray-800 text-sm">Stock: <span class="font-bold">{{ $producto->stock }}</span></p>
            </div>
        @endforeach
    </div>
@endsection