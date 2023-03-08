<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        Post::create([
            'id' => '12',
            'category_id' => 'Dessert',
            'title' => 'tt',
            'content' => 'tt',
            'media' => '12/img.jpg'
        ]);
        Post::create([
            'id' => '11',
            'category_id' => 'Dessert',
            'title' => 'num2',
            'content' => 'hello',
            'media' => '11/img.jpg'
        ]);
        Post::create([
            'id' => '10',
            'category_id' => 'Dessert',
            'title' => 'new data',
            'content' => 'new data',
            'media' => '10/img.jpg'
        ]);
    }
}
