<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compras;
use App\DetalleCompras;

class ComprasController extends Controller
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
            $compras = Compras::all();
            return response()->json($compras);
        }
        catch(Exception $e)
        {
            return response()->json($e);
        }
    }

    public function getComprasWithDetalles()
    {
        try
        {
            $compras = Compras::join('detalle_compras', 'compras.id', '=', 'detalle_compras.compra_id')
            ->select('compras.*','detalle_compras.*')
            ->get();
            return response()->json($compras);
        }
        catch(Exception $e)
        {
            return response()->json($e);
        }
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
            'producto'=>'required',
            'cantidad'=> 'required|integer'
          ]);
          $compra = new Compras([
            'producto' => $request->get('producto'),
            'cantidad'=> $request->get('cantidad')
          ]);
          $compra->save();
          return response()->json(["status"=>"ok",$compra]);
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
            $compra = Compras::find($id);
            $compra->cantidad = $request->get('cantidad');
            $compra->producto = $request->get('producto');
            $compra->save();
            return response()->json(["status"=>"ok",$compra]);
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
        $compras = Compras::find($id);
        $compras->delete();

        return response()->json(["status"=>"ok"]);
    }
}
