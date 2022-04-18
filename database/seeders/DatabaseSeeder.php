<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(UserSeeder::class);
<<<<<<< HEAD
        $this->call(DestinasiSeeder::class);
=======
>>>>>>> d1849d0b3242f3e6983cb9d528d6173893dd7e23
    }
}
