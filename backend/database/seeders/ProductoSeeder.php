<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("productos")->insert([
            [
                'nombre'=> 'Refrigerador',
                'precio'=> 7000,
                'marcas_id'=> 1,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=> 'Televisor',
                'precio'=> 5000,
                'marcas_id'=> 1,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=> 'Televisor 2',
                'precio'=>5000,
                'marcas_id'=> 2,
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
        ]);
    }
}
