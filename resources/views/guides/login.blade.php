@extends('mainLogin')
@section('title', 'Login')
@section('content')
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Entrar</header>
                <form action="{{ route('authLogin') }}" method="POST">
                    @csrf
                    <div class="field input-field">
                        <input type="email" placeholder="E-mail" id="email" name="email" class="input" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Senha" class="password" name="password" id="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="form-link">
                        <a href="" class="forgot-pass">Esqueceu a senha?</a>
                    </div>
                    <div class="field button-field">
                        <button>Entrar</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Ainda não tem um conta?
                        <a href="" class="link login-link">Criar conta!</a>
                    </span>
                </div>
            </div>
            <div class="line"></div>
            <div class="media-options">
                <a href="" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Entrar com Facebook</span>
                </a>
            </div>
            <div class="media-options">
                <a href="{{ route('auth.google') }}" class="field google">
                    <img src="{{ asset('img/google-img.png') }}" class="google-img">
                    <span>Entrar com Google</span>
                </a>
            </div>
        </div>
        {{-- *****************DIVSÃO AQUI************** --}}
        <div class="form signup">
            <div class="form-content">
                <header>Registrar</header>
                <form action="">
                    <div class="field input-field">
                        <input type="email" placeholder="E-mail" class="input">
                    </div>
                    <div class="field input-field">
                        <input type="text" placeholder="Nome" class="input">
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Senha" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="field button-field">
                        <button>Registrar</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Já tem um conta?
                        <a href="" class="link login-link">Entrar!</a>
                    </span>
                </div>
            </div>
            <div class="line"></div>
            <div class="media-options">
                <a href="" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Entrar com Facebook</span>
                </a>
            </div>
            <div class="media-options">
                <a href="" class="field google">
                    <img src="{{ asset('img/google-img.png') }}" class="google-img">
                    <span>Entrar com Google</span>
                </a>
            </div>
        </div>
    </section>
@endsection
