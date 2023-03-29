@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Lista de categorías</h1>

        <table id="categories-table" class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        $(function () {
            $('#categories-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('categories.indexlist') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'},
                    {data: 'status', name: 'status'},
                    {data: 'acciones', name: 'acciones', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endsection
