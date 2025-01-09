<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Guti0414')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome (para íconos) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    @stack('css')
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Header -->
    <header class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto p-5">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-bold">Guti0414</a>
                <nav>
                    <a href="/" class="text-white hover:text-gray-200 px-4">Inicio</a>
                    <a href="/divisas" class="text-white hover:text-gray-200 px-4">Divisas</a>
                    <a href="/personas" class="text-white hover:text-gray-200 px-4">Personas</a>
                    <a href="/casas-de-apuestas" class="text-white hover:text-gray-200 px-4">Casas de Apuestas</a>
                    <a href="/cliente-casa-divisas" class="text-white hover:text-gray-200 px-4">Registros</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-10">
        <div class="container mx-auto py-4 text-center">
            <p>&copy; 2025 Guti0414. Todos los derechos reservados.</p>
            <div class="mt-2">
                <a href="#" class="text-blue-400 mx-2"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-blue-400 mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-blue-400 mx-2"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
