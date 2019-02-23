<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('detalle_compras')->insert([
            'nombre'=>'Pimenton',
            'precio'=>300,
            'compra_id'=>1,
            'categoria_id'=>2,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('detalle_compras')->insert([
            'nombre'=>'Palta',
            'precio'=>500,
            'compra_id'=>2,
            'categoria_id'=>2,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('detalle_compras')->insert([
            'nombre'=>'Cerveza',
            'precio'=>900,
            'compra_id'=>3,
            'categoria_id'=>6,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('detalle_compras')->insert([
            'nombre'=>'Lomo vetado',
            'precio'=>18000,
            'compra_id'=>4,
            'categoria_id'=>1,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('detalle_compras')->insert([
            'nombre'=>'Platano',
            'precio'=>850,
            'compra_id'=>5,
            'categoria_id'=>2,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('detalle_compras')->insert([
            'nombre'=>'Queso quilayes',
            'precio'=>530,
            'compra_id'=>6,
            'categoria_id'=>3,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);


        DB::table('detalle_compras')->insert([
            'nombre'=>'Papas duquesas',
            'precio'=>2190,
            'compra_id'=>7,
            'categoria_id'=>4,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('detalle_compras')->insert([
            'nombre'=>'Harina de maiz PAN',
            'precio'=>2490,
            'compra_id'=>8,
            'categoria_id'=>5,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('detalle_compras')->insert([
            'nombre'=>'Coca-cola',
            'precio'=>1790,
            'compra_id'=>9,
            'categoria_id'=>6,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

    }

}
