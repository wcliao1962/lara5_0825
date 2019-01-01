<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use Faker\Factory as Faker;


class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();

        $total = 10;    // 10 comments at most for each post
        $faker = Faker::create('zh_TW');

        $allPosts = Post::all();

        foreach($allPosts as $post) {
            foreach (range(1, rand(0,$total)) as $index) {
                Comment::create([
                    'content' => $faker->realText(20),
                    'post_id' => $post->id,
                    'created_at' => $post->created_at->addDays(rand(0,9)),
                    'updated_at' => $post->updated_at->addDays(10)->addHours(rand(1, 24)),
                ]);
            }

        }
    }
//
}
