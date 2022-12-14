<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $photos = [
            '0'=> 'https://loremflickr.com/640/480/computer',
            '1'=> 'https://loremflickr.com/640/480/computer',
            '2'=> 'https://loremflickr.com/640/480/computer',
            '3'=> 'https://loremflickr.com/640/480/computer',

        ];
        return [
            'product_id' => null,
            'photos' => json_encode($photos)
        ];
    }
}
