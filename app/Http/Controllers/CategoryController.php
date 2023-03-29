<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DataTables;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'status' => 'required',
            'icon' => 'required',
        ]);

        // Crear una nueva instancia de la categoría con los datos del formulario
        $category = new Category([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'status' => $request->input('status'),
            'icon' => $request->input('icon'),
        ]);

        // Guardar la categoría en la base de datos
        $category->save();

        // Redirigir al usuario a la lista de categorías con un mensaje de éxito
        return redirect()->route('categories.index')->with('success', 'La categoría se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listado()
    {
        $categorias = Category::select(['id', 'name', 'description', 'status']);

        return Datatables::of($categorias)
            ->addColumn('acciones', function ($categoria) {
                return '<a href="' . route('categorias.editar', $categoria->id) . '" class="btn btn-sm btn-primary">Editar</a>
                    <form action="' . route('categorias.eliminar', $categoria->id) . '" method="POST" style="display:inline">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>';
            })
            ->make(true);
    }

}
