<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class Products_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adddata = Faker::create();

        for ($i=0;$i<10;$i++) {
            Product::create([
                'name' => $adddata->name,
                'quantity' => $adddata->numberBetween(0, 120),
                'state' => $adddata->realText(10),
                'description' => $adddata->text(),
                'price' => $adddata->randomFloat(2, 0, 1450000),
                'image' => $adddata->text(25),
                'available' => $adddata->boolean,
                'fk_idcategories'=>$adddata->numberBetween(1,5)
            ]);
        }
    }
}
