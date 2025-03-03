@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<header class="header">
    <h1>Bienvenido a las SmartWalls Recetas</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn-logout">Cerrar Sesión</button>
    </form>
</header>

<div class="container">
    <h2>Recetas Populares</h2>

    <div class="recipe-grid">
        <div class="recipe-card">
            <img src="{{ asset('images/tacos-pastor.jpg') }}" alt="Tacos al Pastor">
            <h3>Tacos al Pastor</h3>
            <p>Deliciosos tacos al pastor con piña</p>
            <a href="{{ route('receta', 'tacos-pastor') }}" class="btn">Ver Receta</a>
        </div>

        <div class="recipe-card">
            <img src="{{ asset('images/esquimal.jpg') }}" alt="Elotes">
            <h3>Elotes</h3>
            <p>Ricos elotes tipo esquimal con chile.</p>
            <a href="{{ route('receta', 'elotes') }}" class="btn">Ver Receta</a>
        </div>

        <div class="recipe-card">
            <img src="{{ asset('images/hamburguesa.jpg') }}" alt="Hamburguesa">
            <h3>Hamburguesa</h3>
            <p>Deliciosa hamburguesa con doble carne y queso</p>
            <a href="{{ route('receta', 'hamburguesa') }}" class="btn">Ver Receta</a>
        </div>

        <div class="recipe-card">
            <img src="{{ asset('images/macarrones-queso.jpg') }}" alt="Macarrones con Queso">
            <h3>Macarrones con Queso</h3>
            <p>Deliciosos macarrones con queso y chipotle con porción de res</p>
            <a href="{{ route('receta', 'macarrones-queso') }}" class="btn">Ver Receta</a>
        </div>

        <div class="recipe-card">
            <img src="{{ asset('images/pizza-carnes.jpg') }}" alt="Pizza Carnes Frías">
            <h3>Pizza Carnes Frías</h3>
            <p>Rica pizza carnes frías para tres personas</p>
            <a href="{{ route('receta', 'pizza-carnes') }}" class="btn">Ver Receta</a>
        </div>

        <div class="recipe-card">
            <img src="{{ asset('images/tacos-barbacoa.jpg') }}" alt="Tacos de Barbacoa">
            <h3>Tacos de Barbacoa</h3>
            <p>Ricos tacos de barbacoa para acompañar con consomé.</p>
            <a href="{{ route('receta', 'tacos-barbacoa') }}" class="btn">Ver Receta</a>
        </div>

        <div class="recipe-card">
            <img src="{{ asset('images/wrap-mixto.jpg') }}" alt="Wrap Mixto">
            <h3>Wrap Mixto</h3>
            <p>Rico wrap mixto con arrachera y ensalada</p>
            <a href="{{ route('receta', 'wrap-mixto') }}" class="btn">Ver Receta</a>
        </div>

        <div class="recipe-card">
            <img src="{{ asset('images/pozole.jpg') }}" alt="Pozole">
            <h3>Pozole</h3>
            <p>Un caldo tradicional rojo mexicano con maíz y carne de cerdo.</p>
            <a href="{{ route('receta', 'pozole') }}" class="btn">Ver Receta</a>
        </div>

        <div class="recipe-card">
            <img src="{{ asset('images/chiles-ennogada.jpg') }}" alt="Chiles en Nogada">
            <h3>Chiles en Nogada</h3>
            <p>Chiles poblanos rellenos de picadillo, cubiertos con nogada.</p>
            <a href="{{ route('receta', 'chiles-ennogada') }}" class="btn">Ver Receta</a>
        </div>
    </div>
</div>

<footer class="footer">
    © 2024 Recetas SmartWalls | <a href="#">Política de Privacidad</a>
</footer>

@endsection
