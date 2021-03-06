<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(Contacts_TableSeeder::class);
        $this->call(Roles_TableSeeder::class);
        $this->call(PaymentMethods_TableSeeder::class);
        $this->call(Categories_TableSeeder::class);
        $this->call(Products_TableSeeder::class);
    }
}
