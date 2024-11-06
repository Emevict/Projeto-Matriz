@extends('main')

@section('title', 'Página Inicial')

@section('content')
    @if (Auth::check())
        <h1>Bem-vindo, <span style="color: green;">{{ Auth::user()->name }}</span>!</h1>
    @else
        <h1>Bem-vindo à Página Inicial</h1>
    @endif
    <p>Este é o conteúdo da página inicial.</p>
@endsection
