<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        if (User::count() > 0) {
            echo "Пользователи уже существуют — сиды пропущены.\n";
            return;
        }

        User::factory()->create([
            'name' => 'Test1',
            'email' => 'test1@example.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Test2',
            'email' => 'test2@example.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Test3',
            'email' => 'test3@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
