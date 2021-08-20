<?php

namespace Database\Seeders;

use App\Models\Porto;
use App\Models\User;
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
        User::create([
            'name' => 'Nikita Samantha',
            'email' => 'nikitasamantha@gmail.com',
            'password' => bcrypt('nikismth')
        ]);

        Porto::create([
            'judul' => 'GFriendsite',
            'keterangan' => 'Web Programming Assigment',
            'gambar' => 'Project_1.png'
        ]);

        Porto::create([
            'judul' => 'Artha Restaurant',
            'keterangan' => 'Web Programming Assigment',
            'gambar' => 'Project_2.png'
        ]);

        Porto::create([
            'judul' => 'Chipsang',
            'keterangan' => 'Web Programming Big Assigment',
            'gambar' => 'Project_3.png'
        ]);
    }
}
