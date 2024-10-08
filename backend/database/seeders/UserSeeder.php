<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role_id' => 4,
            'name' => 'Admin',
            'surname' => 'admin',
            'email' => fake()->email,
            'username' => 'admin',
            'password' => Hash::make('password')
        ]);
        User::factory(40)->create();
    }
}
