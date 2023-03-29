@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Crear nueva Categoría</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción:</label>
                        <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Estado:</label>
                        <select name="status" id="status" class="form-select">
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="icon" class="form-label">Ícono:</label>
                        <div class="input-group">
                            <input type="text" name="icon" id="icon" class="form-control" readonly>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#icon-modal"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="icon-modal" tabindex="-1" aria-labelledby="icon-modal-label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="icon-modal-label">Seleccionar ícono</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-thunderstorm fa-2x"></i></span><span class="text-center d-block mt-2">fa-thunderstorm</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-cloud-showers-heavy fa-2x"></i></span><span class="d-block text-center mt-2">fa-cloud-showers-heavy</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-cloud-rain fa-2x"></i></span><span class="text-center d-block mt-2">fa-cloud-rain</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-sun fa-2x"></i></span><span class="d-block text-center mt-2">fa-sun</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-snowflake fa-2x"></i></span><span class="text-center d-block mt-2">fa-snowflake</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-wind fa-2x"></i></span><span class="d-block text-center mt-2">fa-wind</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-info-circle fa-2x"></i></span><span class="text-center d-block mt-2">fa-info-circle</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-broadcast-tower fa-2x"></i></span><span class="d-block text-center mt-2">fa-broadcast-tower</span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-shield-alt fa-2x"></i></span><span class="text-center d-block mt-2">fa-shield-alt</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-lock fa-2x"></i></span><span class="d-block text-center mt-2">fa-lock</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-user-shield fa-2x"></i></span><span class="text-center d-block mt-2">fas fa-user-shield</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-ambulance fa-2x"></i></span><span class="d-block text-center mt-2">fa-ambulance</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-phone fa-2x"></i></span><span class="text-center d-block mt-2">fa-phone</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-bullhorn fa-2x"></i></span><span class="d-block text-center mt-2">fas fa-bullhorn</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-exclamation-circle fa-2x"></i></span><span class="text-center d-block mt-2">fa-exclamation-circle</span></td>
                                                <td><span class="click-icon d-block text-center"><i class="fas fa-exclamation fa-2x"></i></span><span class="d-block text-center mt-2">fas fa-exclamation</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear categoría</button>
                </form>
            </div>
        </div>
    </div>

    <script type="module">
        jQuery(document).ready(function ($) {
            $('.click-icon').on('click', function (e) {
                e.preventDefault();
                let iconClass = $(this).find('i');
                $('#icon').empty().val(iconClass.attr('class'))
            })
        })
    </script>
@endsection
