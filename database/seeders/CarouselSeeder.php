<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->delete();
        Carousel::create([
            'id' => '1',
            'id_ad' => '0',
            'content' => 'hello1111111',
            'see_more' => 'lorem',
            'media' => '11/img.jpg',
            'post_id' => '11'
        ]);
        Carousel::create([
            'id' => '2',
            'id_ad' => '1',
            'content' => 'hello1111111',
            'see_more' => 'lorem',
            'media' => '11/img.jpg',
            'post_id' => '11'
        ]);
    }
}
