<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Compras;
use App\DetalleCompras;

class DetalleComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $detallesCompras=DetalleCompras::All();
            return response()->json($detallesCompras);
        }
        catch(Exception $e)
        {
            return response()->json($e);
        }
    }

    public function getPreciosCompras()
    {
        try
        {
            $detallesCompras=DetalleCompras::select('categorias.nombre','compras.producto','compras.cantidad', DB::raw('SUM(detalle_compras.precio) as precio'))
            ->join('compras','detalle_compras.compra_id', '=','compras.id')
            ->join('categorias','detalle_compras.categoria_id','=','categorias.id')
            ->groupBy('categorias.nombre','compras.id','compras.producto','compras.cantidad')
            ->orderByRaw('categorias.nombre DESC')
            ->get();
            return response()->json($detallesCompras);
        }
        catch(Exception $e)
        {
            return response()->json($e);
        }
    }

    public function store(Request $request)
    {

      try
      {
        $request->validate([
            'nombre'=>'required',
            'precio'=> 'required'
          ]);
          $detallecompra = new DetalleCompras([
            'nombre' => $request->get('nombre'),
            'precio'=> $request->get('precio')
          ]);
          $detallecompra->save();
          return response()->json(["status"=>"ok",$detallecompra]);
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
            $detallecompra = DetalleCompras::find($id);
            $detallecompra->nombre = $request->get('nombre');
            $detallecompra->precio = $request->get('precio');
            $detallecompra->save();
            return response()->json(["status"=>"ok",$detallecompra]);
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
        $detallecompras = DetalleCompras::find($id);
        $detallecompras->delete();

        return response()->json(["status"=>"ok"]);
    }

}
