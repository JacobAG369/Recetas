@extends('layouts.app')

@section('content')

<div class="recipe-page-container">
    <header class="recipe-header">
        <h1>{{ $receta['nombre'] }}</h1>
        <a href="{{ route('dashboard') }}" class="btn-back">Volver al menú</a>
    </header>

    <div class="recipe-content">
        <div class="recipe-image">
            <img src="{{ asset('images/' . $receta['imagen']) }}" alt="{{ $receta['nombre'] }}">
        </div>

        <div class="recipe-info">
            <h2>Descripción</h2>
            <p>{{ $receta['descripcion'] }}</p>

            <h2>Ingredientes</h2>
            <ul>
                @foreach ($receta['ingredientes'] as $ingrediente)
                    <li>{{ $ingrediente }}</li>
                @endforeach
            </ul>

            <h2>Procedimiento</h2>
            <ol>
                @foreach ($receta['procedimiento'] as $paso)
                    <li>{{ $paso }}</li>
                @endforeach
            </ol>
        </div>
    </div>
</div>

@endsection

