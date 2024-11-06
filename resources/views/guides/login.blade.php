@extends('main')

@section('title', 'Página de Login')

@section('content')
<div>
        <form action="{{ route('authLogin') }}" method="POST">
            @csrf
            <h1 class="text-center">Login</h1>

            <div>
                <label>E-mail:</label>
                <input type="text" name="email" id="email" required>
            </div>

            <div>
                <label>Senha:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <br>
            <a href="{{ route('guideCreateLogin') }}" class="btn btn-primary">Criar Conta</a>
            <button type="submit">Enviar</button>
        </form>
    </div>
@endsection
