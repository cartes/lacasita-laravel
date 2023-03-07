@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Posts</h2>
        </div>
    </div>
    @if($posts->isEmpty())
        <h4>Por ahora no hay ningún post
            <creado></creado>
        </h4>
        <a href="{{ route('post.create') }}" class="btn btn-primary">Crear post</a>
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title py-3 rounded-top">Listado de Posts</h3>
                    </div>
                    <div class="card-body">
                        <table id="posts-table" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                        <label class="form-check-label" for="select-all">
                                            Seleccionar Todos
                                        </label>
                                    </div>
                                </th>
                                <th>Título</th>
                                <th>Categoría</th>
                                <th>Visibilidad</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('scripts')
    <script>
        $(function () {
            $('#posts-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("post.index") }}',
                columns: [
                    {data: 'checkbox', name: 'checkbox', orderable: false, searchable: false},
                    {data: 'title', name: 'title'},
                    {data: 'category.name', name: 'category.name'},
                    {data: 'visibility', name: 'visibility'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false},
                ]
            });

            // Seleccionar todos los checkboxes
            $('#select-all').click(function () {
                $(':checkbox').prop('checked', this.checked);
            });
        });
    </script>
@endpush
