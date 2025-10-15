<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         for ($i=0; $i < 10 ; $i++) {
            $email = "test_$i@example.com"; 
            $index = rand(1,1000);
            if (User::where('email', $email)->exists()) {
                continue;
            }
            User::factory()->create([
                'email' => $email,
                'image_url'=> "https://picsum.photos/seed/$index/200/300"
            ])->toArray();
        }
    }
}
