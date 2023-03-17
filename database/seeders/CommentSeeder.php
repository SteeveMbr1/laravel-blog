<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $posts = \App\Models\Post::all()->random(3, 10);

        foreach ($posts as $post) {
            \App\Models\Comment::factory(rand(1, 4))
                ->for($post)
                ->create();
        }
    }
}
