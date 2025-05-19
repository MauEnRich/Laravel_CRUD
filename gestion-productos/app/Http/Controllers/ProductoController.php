<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /*Envia los productos al Index*/
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    /*Formulario para crear producto*/
    public function create()
    {
        return view('productos.create');
    }

    /*Crea un nuevo producto*/
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'precio_unitario' => 'required|numeric|min:0.01',
            'cantidad' => 'required|integer|min:0',
            'categoria' => 'required'
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')
                         ->with('success', 'Producto creado exitosamente.');
    }

    /*Muestra el contenido de un producto existente*/
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }


    /*Permite actualizar un producto*/
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'precio_unitario' => 'required|numeric|min:0.01',
            'cantidad' => 'required|integer|min:0',
            'categoria' => 'required'
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect()->route('productos.index')
                         ->with('success', 'Producto actualizado correctamente.');
    }

    /*Permite borrar un producto*/
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado.');
    }
}
