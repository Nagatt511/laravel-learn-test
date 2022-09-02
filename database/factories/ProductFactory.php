<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->numerify('Product ###'),
        'slug'=> '',
        'description' => $this->faker->paragraph(4,true),
        'price'=>$this->faker->randomFloat (2,10,999),
        'barcode'=> $this->faker->ean8,
        'stock' => $this->faker-> numberBetween(0,999),
        'cover' => 'https://via.placeholder.com./640x480'
        ];
    }
}