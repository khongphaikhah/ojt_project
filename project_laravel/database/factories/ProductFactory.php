<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name' => $this->faker->name,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween($min = 100000, $max = 1000000),
            'quantity' => $this->faker->numberBetween($min = 10, $max = 100),
            'description' => $this->faker->paragraph(),
            'category_id' => Category::inRandomOrder()->value('id'),
        ];
    }
}
