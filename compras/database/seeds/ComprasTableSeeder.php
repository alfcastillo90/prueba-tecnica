<?php

use Illuminate\Database\Seeder;

class ComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compras')->insert([
            "cantidad"=>20,
            "producto"=>"Pimenton",
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('compras')->insert([
            "cantidad"=>5,
            "producto"=>"Palta",
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('compras')->insert([
            "cantidad"=>4,
            "producto"=>"Cerveza",
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('compras')->insert([
            "cantidad"=>1,
            "producto"=>"Lomo vetado",
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('compras')->insert([
            "cantidad"=>10,
            "producto"=>"Platano",
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('compras')->insert([
            "cantidad"=>2,
            "producto"=>"Queso quilayes",
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('compras')->insert([
            "cantidad"=>1,
            "producto"=>"Papas duquesas",
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('compras')->insert([
            "cantidad"=>3,
            "producto"=>"Harina de maiz PAN",
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        DB::table('compras')->insert([
            "cantidad"=>1,
            "producto"=>"Coca-cola",
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

    }
}
