<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Almacen;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::query();
    

        if ($request->filled('almacen_filter')) {
            $productos->where('almacen_id', $request->input('almacen_filter'));
        }
    

        if ($request->filled('categoria_filter')) {
            $productos->where('categoria_id', $request->input('categoria_filter'));
        }
    

        $almacenes = Almacen::all();
        $categorias = Categoria::all();
    
        $productos = $productos->get();
    
        return view('productos.index', compact('productos', 'almacenes', 'categorias'));
    }

    public function create()
    {
        $categorias = Categoria::all(); 
        $almacenes = Almacen::all(); 
        return view('productos.create', compact('categorias', 'almacenes'));
    }
    

    public function edit($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all(); 
        $almacenes = Almacen::all(); 
        return view('productos.edit', compact('producto', 'categorias', 'almacenes'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'categoria_id' => 'required',
            'almacen_id' => 'required',
        ]);

        Producto::create([
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'observaciones' => $request->input('observaciones'),
            'categoria_id' => $request->input('categoria_id'),
            'almacen_id' => $request->input('almacen_id'),
        ]);

        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito');
        
        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'categoria_id' => 'required',
            'almacen_id' => 'required',
        ]);

        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->observaciones = $request->input('observaciones');
        $producto->categoria_id = $request->input('categoria_id');
        $producto->almacen_id = $request->input('almacen_id');
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito');
    }

    public function confirmDelete($id)
    {
        $producto = Producto::find($id);
        return view('productos.confirm', compact('producto'));
    }
    
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }


}
