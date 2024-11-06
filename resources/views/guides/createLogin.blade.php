@extends('main')

@section('title', 'Página Inicial')

@section('content')
<div>
        <form action="" method="POST">
            @csrf
            <h1 class="text-center">Criar Usuario</h1>

            <div>
                <label>Nome:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div>
                <label>E-mail:</label>
                <input type="text" name="email" id="email" required>
            </div>

            <div>
                <label>Senha:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <br>
            <a href="{{ route('guideLogin') }}" class="btn btn-primary">Voltar</a>
            <button type="submit">Enviar</button>
        </form>
    </div>
@endsection
