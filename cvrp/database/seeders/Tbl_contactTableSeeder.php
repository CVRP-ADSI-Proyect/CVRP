<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Tbl_contact;
use Faker\Factory as Faker;

class Tbl_contactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addata=Faker::create();
        for($i=0;$i<12;$i++){
        Tbl_contact::create([
            'primernombre'=>$addata->firstName,
            'segundonombre'=>$addata->firstName,
            'primerapellido'=>$addata->lastName,
            'segundoapellido'=>$addata->lastName,
            'email'=>$addata->email,
            'celular'=>$addata->phoneNumber,
            'mensaje'=>$addata->text($maxNbChars = 80)
        ]);
        }
    }
}
