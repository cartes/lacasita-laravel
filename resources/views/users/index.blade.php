@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Users</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered" id="users-table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script type="module">
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('users.index') !!}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'role.name', name: 'role.name' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
    });
</script>
@endpush
