<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Arpri',
            'level' => 'admin',
            'email' => 'arpri@admin.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Qwerty',
            'level' => 'user',
            'email' => 'qwerty@user.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'haha',
            'level' => 'user',
            'email' => 'haha@user.com',
            'password' => bcrypt('qwerty'),
        ]);
    }
}
