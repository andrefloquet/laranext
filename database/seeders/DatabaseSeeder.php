<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1 = User::factory()->create([
            'name' => 'Andre Floquet',
            'email' => 'andrefloquet@gmail.com',
            'password' => Hash::make('Test123!'),
        ]);
        $user2 = User::factory()->create();
        $user3 = User::factory()->create();

        Post::factory(10)->create([
            'user_id' => $user1
        ]);

        Post::factory(7)->create([
            'user_id' => $user2
        ]);

        Post::factory(5)->create([
            'user_id' => $user3
        ]);
    }
}
