@extends('layouts.miPlantilla')

@section('content')
    <div class="register-box">
        <h2 class="text-center mb-4">Registrar Producto</h2>

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control input-custom" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>

            <div class="form-group">
                <textarea class="form-control input-custom" id="descripcion" name="descripcion" placeholder="Descripción"></textarea>
            </div>

            <div class="form-group">
                <input type="number" class="form-control input-custom" id="precio_unitario" name="precio_unitario" placeholder="Precio Unitario" required step="0.01" min="0.01">
            </div>

            <div class="form-group">
                <input type="number" class="form-control input-custom" id="cantidad" name="cantidad" placeholder="Cantidad" required min="0">
            </div>

            <div class="form-group">
                <input type="text" class="form-control input-custom" id="categoria" name="categoria" placeholder="Categoría" required>
            </div>

            <button type="submit" class="btn btn-register btn-block">Registrar Producto</button>
        </form>
    </div>
@endsection
