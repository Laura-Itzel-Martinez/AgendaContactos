<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consulta eloquet nos regresa todo lo que hay en categoria
        $categorias= Categoria::all();

        //consulta con parametro compact la variable se convierte en un string
        return view('categorias/inicio', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //no es para guarda bd es para regresar la vista que va mostrar el formulario
        //que tiene los inputs para guardar informacion

        return view('categorias/agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //almacena en la bd no require parametros solamente requiere que aventemos a la ruta
        //   reqquest llega por post

        $categoria= new Categoria();
        $categoria->nombre = $request->post('nombre');
        $categoria->descripcion = $request->post('descripcion');
        $categoria->save();

        return redirect()->route('categoria.index')->with('success', 'agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $categoria = Categoria::find($id);
        return view('categorias/eliminar', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */


    // cuando entremos a edit ya vamos a tener la informacion para ponerlo en el formulario
    public function edit($id)
    {
        //find nos busca por id, nos crea una instancia de categorias por medio de id
        //nos traer la informcion del id que le damos de cuestion

        $categoria = Categoria::find($id);
        return view('categorias/editar', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $categoria = Categoria::find($id);
        //donde encuentre el id en el registro me traiga en nombre y le asigne lo que traigo
        $categoria->nombre = $request->post('nombre');
        $categoria->descripcion = $request->post('descripcion');
        $categoria->save();

        return redirect()->route('categoria.index')->with('success', 'actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria.index')->with('success', 'eliminado con exito');

    }
}
