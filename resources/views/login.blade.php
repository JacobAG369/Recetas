@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
</head>

    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Ingresar</button>
        </form>
        <p>¿No tienes cuenta? <a href="{{ route('register') }}" class="register-link">Regístrate aquí</a></p>
    </div>
@endsection
