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
                    @if(Auth::user()->is_master)
                        <th>Administrador</th>
                    @endif
                    @if(Auth::user()->is_admin || Auth::user()->is_master)
                        <th>Perfil</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($userService->getUsers() as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $userService->treatmentName($user->name) }}</td>
                        @if(Auth::user()->is_master)
                        <td>
                            <form method="POST" action="{{ route('update-user-admin', ['user_id' => $user->id, 'is_admin' => $user->is_admin]) }}">
                                @csrf
                                <input type="checkbox" class="admin-checkbox" data-user-id="{{ $user->id }}" 
                                       {{ $user->is_admin ? 'checked' : '' }} 
                                       onchange="this.form.submit()"
                                       >
                            </form>
                        </td>
                        @endif
                        @if(Auth::user()->is_admin || Auth::user()->is_master)
                            <td>
                                <select name="" id="">
                                    <option value="1">Oi</option>
                                    <option value="2">xau</option>
                                    <option value="3">Ei</option>
                                </select>
                            </td>
                        @endif           
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
