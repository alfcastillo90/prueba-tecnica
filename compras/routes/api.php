<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('compras','ComprasController@index');
Route::get('compras/detallesasociados','ComprasController@getComprasWithDetalles');
Route::get('detalle_compras','DetalleComprasController@index');
Route::get('detalle_compras/totalescompras','DetalleComprasController@getPreciosCompras');
/*
Route::apiResource('categorias','CategoriasController');
Route::apiResource('compras','ComprasController');
Route::apiResource('detalle_compras','DetalleComprasController');*/

