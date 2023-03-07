@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Roles</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if ($roles->count() == 0)
                <p>No hay roles registrados.</p>
                <a href="{{ route('roles.create') }}" class="btn btn-primary">Crear Rol</a>
            @else
                <table class="table table-bordered" id="roles-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
    <script type="module">
        $(function () {
            $('#roles-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('roles.index') }}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'}
                ]
            });
        });
    </script>
@endpush
