<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        // $categorias = Categoria::where('status_categoria', 1)->get();
        return view('list_categorias',compact('categorias'));
    }


    public function categoria_create() {
        return view('create_categoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Categoria::create($request->all());
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    public function update_categoria(Categoria $category) {
        return view('update_categoria',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $category)
    {
        $category->update($request->all());
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function updateStatus(Request $request, Categoria $category) {
        $category->status_categoria = ($category->status_categoria == 1) ? 0 : 1;
        $category->save();
        return redirect()->route("index");
    }
}
