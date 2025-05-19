@extends('layouts.miPlantilla')

@section('content')
    <div style="display: flex; align-items: center; justify-content: center; gap: 20px; margin-bottom: 30px;">
        <img src="{{ asset('images/logo.jpg') }}" alt="Delizia Foods Logo" style="width: 100px; height: 100px; border-radius: 10px;">
        <h1 style="margin: 0;">MauEnRich S.A. de C.V.</h1>
    </div>

    <br><br>

    <h1>Listado de Productos</h1>

    <div class="formulario-productos">
        @if(session('success'))
            <div class="alert alert-success mensaje-exito">
                {{ session('success') }}
            </div>
        @endif

        @foreach($productos as $producto)
            <div class="card-producto">
                <div><strong>Nombre:</strong> {{ $producto->nombre }}</div>
                <div><strong>Descripción:</strong> {{ $producto->descripcion }}</div>
                <div><strong>Precio:</strong> ${{ number_format($producto->precio_unitario, 2) }}</div>
                <div><strong>Cantidad:</strong> {{ $producto->cantidad }}</div>
                <div><strong>Categoría:</strong> {{ $producto->categoria }}</div>
                <div class="acciones">
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach

        <a href="{{ route('productos.create') }}" class="btn btn-primary btn-nuevo">Nuevo Producto</a>
    </div>
@endsection
