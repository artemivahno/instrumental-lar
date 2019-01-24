<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * http://simple-training.com/basics-of-laravel5/laravel5-seeds/
     *
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    }
}

class PostsSeeder extends Seeder {

   /* public function run()
    {
        DB::table('Posts')->delete();
        Post::create([
            'title' => 'First Post',
            'slug' => 'first-post',
            'excerpt' => 'First Post body',
            'content' => 'Content First Post body',
            'published' => true,
            //'published_at' => DB::raw('NOW()'), // для DateTime
            'published_at' => DB::raw('CURRENT_TIMESTAMP'), // для timestamp
        ]);

        Post::create([
            'title' => 'Second Post',
            'slug' => 'second-post',
            'excerpt' => 'Second Post body',
            'content' => 'Content Second Post body',
            'published' => false,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Post::create([
            'title' => 'Third Post',
            'slug' => 'third-post',
            'excerpt' => 'Third Post body',
            'content' => 'Content Third Post body',
            'published' => false,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }*/
}
