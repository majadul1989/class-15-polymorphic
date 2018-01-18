<?php

use App\Comment;
use App\Post;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            $post->comments()->saveMany(factory(Comment::class, mt_rand(2, 8))->make());
        }
    }
}
