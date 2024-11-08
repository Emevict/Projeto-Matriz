@inject('UserService', 'App\Http\Services\UserService')
@extends('main')
@section('title', 'Perfil')
@section('content')
    @include('layouts.modal')
    <div class="form-container">
        <div class="input-group">
            <label for="cargo">Cargo</label>
            <input type="text" id="cargo" name="cargo" placeholder=" " required>
        </div>
        <div class="input-group">
            <label for="permissoes">Permissões</label>
            <input type="text" id="permissoes" name="permissoes" placeholder=" " required>
        </div>
        <div class="input-group">
            <label for="administrador">Administrador</label>
            <input type="checkbox" class="admin-checkbox" id="administrador" name="administrador">
        </div>
        <button type="button">Salvar</button>
    </div>
    
    <hr>
    <div class="table-wrapper">
        <table id="permissions-table" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cargo</th>
                    <th>Permissões</th>
                    <th>Administrador</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dados de exemplo -->
                <tr>
                    <td>1</td>
                    <td>Gerente</td>
                    <td>Gerenciar projetos, aprovar solicitações</td>
                    <td>Sim</td>
                    <td><button>Editar</button> <button>Excluir</button></td>
                </tr>
                <!-- Mais linhas podem ser adicionadas aqui -->
            </tbody>
        </table>
    </div>
@endsection