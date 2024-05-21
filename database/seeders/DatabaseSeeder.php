<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//para
use App\Models\Fungus;

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
        //esto llama a los demas seeder de aqui
        $this->call(UserSeeder::class);
        $this->call(FungusSeeder::class);
        Fungus::factory(10)->create();
    }
}
