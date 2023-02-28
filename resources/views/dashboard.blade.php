@extends('layouts.app')

@section('content')
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Dashboard</h3>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="#usersSubMenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <i class="fas fa-users"></i> Usuarios
                </a>
                <ul class="collapse list-unstyled" id="usersSubMenu">
                    <li>
                        <a href="#">Ver Usuarios</a>
                    </li>
                    <li>
                        <a href="#">Agregar Usuario</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#rolesSubMenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
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
@endsection
