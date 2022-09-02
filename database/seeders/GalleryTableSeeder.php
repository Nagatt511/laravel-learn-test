<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::all()->each( function ($product) {
            $gallery = \App\Models\Gallery::factory()->create();
            $product->gallery()->save($gallery);
        });
    }
}
