<?php

namespace Database\Seeders;

use App\Models\Tbl_metododepago;
use Illuminate\Database\Seeder;

class Tbl_metododepago_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tbl_metododepago::create([
            'descripcionMetodoPago'=>'P3'
        ]);
    }
}
