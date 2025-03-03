@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
    <div class="register-container">
        <h1>Crear una Cuenta</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password-confirm">Confirmar Contraseña:</label>
                <input type="password" id="password-confirm" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn">Registrarse</button>
        </form>
        <p>¿Ya tienes cuenta? <a href="{{ route('login') }}" class="login-link">Inicia sesión aquí</a></p>
    </div>
@endsection
