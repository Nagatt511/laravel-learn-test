<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Category::class;

    public function definition()
    {
        return [
            'name'=> $this->faker->randomElement(['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'])
        ];
    }
}
