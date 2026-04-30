<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // user ثابت للتيستنج
        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(19)->create(); // 20 users total
    }
}
