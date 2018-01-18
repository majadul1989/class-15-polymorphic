<?php

use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class PostTagPivoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post_ids = Post::all();
        $tag_ids =  Tag::all();
        foreach ($post_ids as $post){
            $post->tags()->attach($tag_ids);
        }
    }
}
