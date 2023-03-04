@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Users</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name ?? '' }}</td>
                    <td><a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
                    <td><a href="{{ route('users.roles', $user->id) }}">Cambiar rol</a></td>
                </tr>
            @endforeach
        </div>
    </div>

@endsection
