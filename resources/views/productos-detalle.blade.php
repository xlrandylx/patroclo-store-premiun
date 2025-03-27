@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mt-4 mb-4 bg-gray-200 p-4 rounded shadow border-b-4 border-green-500">
        <h2><span class="font-bold">{{ $producto->nombre }}</span></h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
    @if ($producto->imagenes->isNotEmpty())
        <div class="mt-4">
            <div x-data="{ currentIndex: 0, images: [
                @foreach ($producto->imagenes as $imagen)
                    '{{ asset($imagen->imagen_url) }}',
                @endforeach
                ] }" class="relative w-full max-w-2xl mx-auto">
                
                <!-- Imágenes del carrusel -->
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img :src="images[currentIndex]" class="w-full h-75 object-cover rounded" alt="Imagen del producto">
                </div>

                <!-- Botón Anterior -->
                <button @click="currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                    &#10094;
                </button>

                <!-- Botón Siguiente -->
                <button @click="currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0"
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                    &#10095;
                </button>

                <!-- Indicadores -->
                <div class="flex justify-center space-x-2 mt-3">
                    <template x-for="(image, index) in images" :key="index">
                        <button @click="currentIndex = index"
                            :class="currentIndex === index ? 'bg-blue-500' : 'bg-gray-400'"
                            class="w-3 h-3 rounded-full"></button>
                    </template>
                </div>
            </div>
        </div>
    @endif
        <div>
            <h4 class="text-gray-700">Código: <span class="font-bold">{{ $producto->codigo }}</span></h4>
            <h4 class="text-green-500 font-bold text-lg mt-2">{{ $producto->precio_dolares }}</h4>
            <h4 class="text-gray-700">Stock: <span class="font-bold">{{ $producto->stock }}</span></h4>
            @if ($producto->proveedor)
            <div class="mt-4 p-3 bg-gray-100 rounded">
                <h4 class="text-gray-700 font-bold">Proveedor:</h4>
                <p class="text-gray-600">{{ $producto->proveedor->nombre_comercial }}</p>
            </div>
            @endif
            <a href="{{ $producto->informacion_fabricante_url }}" target="_blank"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 inline-block">
                Información del Fabricante
            </a>
            <a href="{{ route('productos.obtener', ['id' => $producto->id_subcategoria]) }}"
                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-3 inline-block">
                Volver
            </a>
        </div>
    </div>

    <hr class="my-6">

    <div>
        <h3 class="font-bold text-lg">Descripción:</h3>
        <p class="text-gray-700">{{ $producto->descripcion }}</p>
    </div>

    <div class="mt-4">
        <h3 class="font-bold text-lg">Especificaciones:</h3>
        @foreach (explode(',', $producto->especificaciones) as $especificacion)
            <p class="text-gray-700">• {{ trim($especificacion) }}</p>
        @endforeach
    </div>
    @if ($producto->marca)
    <div class="mt-4">
        <h3 class="font-bold text-lg">Marca:</h3>
        <img src="{{ asset($producto->marca->logo_url) }}" class="h-50 w-auto" alt="Marca">
    </div>
    @endif

    
</div>
@endsection