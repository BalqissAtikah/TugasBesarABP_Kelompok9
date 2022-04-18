<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Arpri',
            'level' => 'admin',
            'email' => 'arpri@admin.com',
            'password' => Hash::make('12345678')],
            ['name' => 'Qwerty',
            'level' => 'user',
            'email' => 'qwerty@user.com',
            'password' => Hash::make('12345678')],
            ['name' => 'haha',
            'level' => 'user',
            'email' => 'haha@user.com',
            'password' => Hash::make('12345678')],
        ]);
    }
}
