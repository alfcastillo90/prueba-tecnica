<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compras::all();

        return view('compras.index', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
      return redirect('/compras')->with('success', 'compra registrada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra = Compras::find($id);

        return view('compras.edit', compact('compras'));
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
  
        $compra = Compras::find($id);
        $compra->compra_name = $request->get('cantidad');
        $compra->compra_price = $request->get('producto');
        $compra->save();
  
        return redirect('/compras')->with('success', 'Compra actualizada');
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

        return redirect('/compras')->with('success', 'Stock has been deleted Successfully');
    }
}
