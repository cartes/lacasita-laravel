<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <main class="py-o">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>{{env('APP_NAME')}}</h1>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#usersSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
                        <i class="fas fa-users"></i> Usuarios
                    </a>
                    <ul class="collapse list-unstyled" id="usersSubMenu">
                        <li>
                            <a class="nav-link" href="#">Ver Usuarios</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Agregar Usuario</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#rolesSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users-cog"></i> Roles
                    </a>
                    <ul class="collapse list-unstyled" id="rolesSubMenu">
                        <li>
                            <a href="#">Ver Roles</a>
                        </li>
                        <li>
                            <a href="#">Agregar Rol</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Contenido de la página -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </nav>
            <div class="container-fluid mt-3">
                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>
</html>
