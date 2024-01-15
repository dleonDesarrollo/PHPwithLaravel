<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombre de tu Sitio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">
    <header class="bg-white dark:bg-gray-800/50 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="#">
                    <img src="logo.svg" alt="Logo" class="h-12 w-auto">
                </a>
            </div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Inicio</a></li>
                    <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Acerca</a></li>
                    <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Servicios</a></li>
                    <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4">
        <!-- Contenido principal de la página -->
        @yield('content')
    </main>

    <footer class="bg-white dark:bg-gray-800/50 p-4 mt-8">
        <div class="container mx-auto">
            <p class="text-center text-gray-600 dark:text-gray-400">&copy; 2024 Nombre de tu Sitio. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
