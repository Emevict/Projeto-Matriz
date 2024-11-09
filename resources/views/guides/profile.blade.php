@extends('main')
@inject('ProfileServices', 'App\Http\Services\ProfileServices')
@section('title', 'Perfil')
@section('content')
    @include('layouts.modal')
    <div class="table-wrapper">
        <div class="btn-wrapper">
            <button type="button" class="btn-custom" id="btnAdd">
                +
                <div class="tooltip" id="tooltipText">Clique para adicionar um novo cargo</div>
            </button>
        </div>
        <table id="permissions-table" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cargo</th>
                    <th>Permissões</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ProfileServices->getProfiles() as $profile)
                    <tr>
                        <td>{{ $profile->id }}</td>
                        <td>{{ $profile->description }}</td>
                        <td>{{ implode(', ', explode(',', trim($profile->permissions, '"'))) }}</td>
                        <td class="actions">
                            <a href="#" class="edit-btn" data-id="{{ $profile->id }}" data-name="{{ $profile->description }}" data-permissions="{{ implode(', ', explode(',', trim($profile->permissions, '"'))) }}">
                                <i class="ri-edit-box-line"></i>
                            </a>
                            <form action="{{ route('deleteProfile', $profile->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir este perfil?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                    <i class="ri-delete-bin-6-line"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal-profile" id="addModal" style="display: none">
        <div class="modal-profile-content">
            <span class="close">&times;</span>
            <h2>Adicionar Cargo</h2>
            <form action="{{ route('addProfile') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label  class="label-profile" for="name">Nome:</label>
                    <input class="input-profile" type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label class="label-profile" for="permissions">Permissões:</label>
                    <input class="input-profile" type="text" id="permissions" name="permissions" required>
                </div>
                <button class="btn_profile" type="submit">Adicionar</button>
            </form>
        </div>
    </div>
    <div class="modal-profile" id="addModalEdit" style="display: none">
        <div class="modal-profile-content">
            <span class="close">&times;</span>
            <h2>Editar Cargo</h2>
            <form action="{{ route('updateProfile') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label  class="label-profile" for="name">Nome:</label>
                    <input class="input-profile" type="text" id="nameModal" name="nameModal" value="" required>
                </div>
                <div class="form-group">
                    <label class="label-profile" for="permissions">Permissões:</label>
                    <input class="input-profile" type="text" id="permissionsModal" name="permissionsModal" value="" required>
                </div>
                <input type="hidden" name="idModal" id="idModal" value="">
                <button class="btn_profile" type="submit">Adicionar</button>
            </form>
        </div>
    </div>
@endsection
