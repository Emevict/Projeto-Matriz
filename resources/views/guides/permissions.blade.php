@extends('main')
@inject('PermissionService', 'App\Http\Services\PermissionService')
@inject('userService', 'App\Http\Services\UserService')

@section('title', 'Página de Permissões')
@section('content')
    <div class="table-wrapper">
        <table id="permissions-table" class="hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Administrador</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userService->getUsers() as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $userService->treatmentName($user->name) }}</td>
                        <td>
                            <form method="POST" action="{{ route('update-user-admin', ['user_id' => $user->id, 'is_admin' => $user->is_admin]) }}">
                                @csrf
                                <input type="checkbox" class="admin-checkbox" data-user-id="{{ $user->id }}" 
                                       {{ $user->is_admin ? 'checked' : '' }} 
                                       onchange="this.form.submit()"
                                       @disabled(true)>
                            </form>
                        </td>                    
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
