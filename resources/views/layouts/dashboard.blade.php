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
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.scss'])

    @stack('scripts')
</head>
<body>
<div class="top-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-auto">
                <h4>User Profile Info</h4>
            </div>
            <div class="col-auto ms-auto">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="my-1 btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="app">
    <main class="py-0">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>{{env('APP_NAME')}}</h1>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#postsSubMenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-newspaper"></i> Posts
                    </a>
                    <ul class="collapse list-unstyled" id="postsSubMenu">
                        <li>
                            <a class="nav-link" href="{{route('post.index')}}">Ver posts</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('post.create')}}">Crear Nuevo post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#categoriesSubMenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-list-ul"></i> Categories
                    </a>
                    <ul class="collapse list-unstyled" id="categoriesSubMenu">
                        <li>
                            <a class="nav-link" href="{{route('categories.index')}}">Ver Categorias</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('categories.create')}}">Crear Nueva categorias</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#usersSubMenu" data-bs-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
                        <i class="fas fa-users"></i> Users
                    </a>
                    <ul class="collapse list-unstyled" id="usersSubMenu">
                        <li>
                            <a class="nav-link" href="{{route('users.index')}}">Ver Usuarios</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Agregar Usuario</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#rolesSubMenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users-cog"></i> Roles
                    </a>
                    <ul class="collapse list-unstyled" id="rolesSubMenu">
                        <li>
                            <a href="{{route('roles.index')}}">Ver Roles</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Contenido de la página -->
        <div id="content">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Library</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="#">Data</a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid pt-3">
                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>
</html>
