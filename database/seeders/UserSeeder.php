<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'profile_photo_path' =>'img/usuario.jpg',
            'password' => bcrypt('Admin@159'),
        ]);

        User::create([
            'name' => 'director',
            'email' => 'user@test.com',
            'profile_photo_path' =>'img/usuario.jpg',
            'password' => bcrypt('User@159')
        ]);


        User::create([
            'name' => 'operador',
            'email' => 'operador@test.com',
            'profile_photo_path' =>'img/usuario.jpg',
            'password' => bcrypt('Operador@159')
        ]);
    }
}
