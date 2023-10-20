<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Petugas::factory(10)->create();
        Petugas::create([
            'nama_petugas' => 'Adminstrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'kontak' => '081563943793',
            'level' => 'admin',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
