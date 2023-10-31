<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Almacen;
use App\Models\Categoria;

class AlmacenController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        $almacenes = Almacen::all();
        $categorias = Categoria::all();
        return view('almacenes.index', compact('almacenes', 'categorias', 'productos'));
    }

    public function create()
    {
        return view('almacenes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:almacenes',
        ]);

        Almacen::create([
            'nombre' => $request->input('nombre'),
        ]);

        return redirect()->route('almacenes.index')->with('success', 'Almacén creado con éxito');
    }


    public function edit($id)
    {
        $almacen = Almacen::find($id);
        return view('almacenes.edit', compact('almacen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|unique:almacenes',
        ]);

        $almacen = Almacen::find($id);
        $almacen->nombre = $request->input('nombre');
        $almacen->save();

        return redirect()->route('almacenes.index')->with('success', 'Almacén actualizado con éxito');
    }

    public function destroy($id)
    {
        $almacen = Almacen::find($id);
        $almacen->delete();

        return redirect()->route('almacenes.index')->with('success', 'Almacén eliminado con éxito');
    }

    public function confirmDelete($id)
    {
        $almacen = Almacen::find($id);
        return view('almacenes.confirm', compact('almacen'));
    }

}
