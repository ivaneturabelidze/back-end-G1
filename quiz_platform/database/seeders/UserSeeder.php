<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users') -> insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('adminpas'),
            'created_at' => DB::raw('current_timestamp'),
            'updated_at' => DB::raw('current_timestamp')
        ]);
    }
}
