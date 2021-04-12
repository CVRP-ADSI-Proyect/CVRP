<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class Categories_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = ['Herramienta','Computadores','Consolas','Joyería','Electrodomésticos'];
        foreach ($categorias as $category){
            Category::create([
                'category_name'=>$category
            ]);
        }
    }
}
