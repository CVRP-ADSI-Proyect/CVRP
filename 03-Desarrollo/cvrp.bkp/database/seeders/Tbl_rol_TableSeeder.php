<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tbl_rol;

class Tbl_rol_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tbl_rol::create([
            'descrpcionrol'=>'Prueba'
        ]);
////        $faker=Faker::create();
////
////        for ($i=0;$i<10;$i ++){
////            Tbl_rol::create([
////                'descrpcionrol'=>$faker->descrpcionrol,
////            ]);
//
//        }
    }
}
