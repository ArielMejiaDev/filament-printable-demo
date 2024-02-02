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
        User::factory()->create([
           'name' => 'Ariel Mejia',
           'email' => 'arielmejiadev@gmail.com'
        ]);

        User::factory()->count(49)->create();
    }
}
