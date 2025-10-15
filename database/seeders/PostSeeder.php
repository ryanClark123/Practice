<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user_ids = User::get('id');

       foreach ($user_ids as $user_id) {
        for ($i = 0; $i < 10; $i++) {
            Post::factory()->create([
                'user_id'=> $user_id,
                'updated_at' => null
            ]);
            }
        }
    }
}
