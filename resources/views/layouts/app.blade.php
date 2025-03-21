<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patroclo Store</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>

    <header>
        @include('partials.menubar')
    </header>

    <main>
        <div class="max-w-[1080px] pt-5 m-auto">
            @yield('content')
        </div>
    </main>

</body>
</html>