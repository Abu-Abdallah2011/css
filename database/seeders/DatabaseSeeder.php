<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'username' => 'Abu Abdallah',
            'email' => 'sadiqmustaphaahmad@gmail.com',
            'role' => 'ADMIN',
            'password' => '$2y$10$7VmDKBADsHSS.Svp4cwc/Oj/DFaWW8eNXQJUn/i389rb0nizRiiaW',
        ]);
    }
}
