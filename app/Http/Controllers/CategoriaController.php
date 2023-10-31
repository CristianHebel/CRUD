<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Almacen;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $almacenes = Almacen::all();
        $categorias = Categoria::all();
        return view('almacenes.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:categorias',
        ]);

        Categoria::create([
            'nombre' => $request->input('nombre'),
        ]);

        return redirect()->route('almacenes.index')->with('success', 'Categoría creada con éxito');
    }



    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|unique:categorias',
        ]);

        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->save();

        return redirect()->route('almacenes.index')->with('success', 'Categoría actualizada con éxito');
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('almacenes.index')->with('success', 'Categoría eliminada con éxito');
    }

    public function confirmDelete($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.confirm', compact('categoria'));
    }

}
