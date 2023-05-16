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

        \App\Models\User::factory()->create([
            'name' => 'Arthur',
            'email' => 'arthur2052@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        \App\Models\User::factory(10)->create();
    }
}