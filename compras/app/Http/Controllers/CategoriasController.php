<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias =  Categorias::All();
        return response()->json($categorias);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      try
      {
        $request->validate([
            'nombre'=>'required',
          ]);
          $categoria = new Categorias([
            'nombre' => $request->get('nombre')
          ]);
          $categoria->save();
          return response()->json(["status"=>"ok",$categoria]);
      }
      catch(Exception $e)
      {
          return response()->json($e);
      }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try
        {
            $categoria = Categorias::find($id);
            $categoria->nombre = $request->get('nombre');
            $categoria->save();
            return response()->json(["status"=>"ok",$categoria]);
        }
        catch(Exception $e)
        {
            return response()->json($e);
        }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias = Categorias::find($id);
        $categorias->delete();

        return response()->json(["status"=>"ok"]);
    }

}
