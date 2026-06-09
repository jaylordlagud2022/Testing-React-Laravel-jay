<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'img' => $this->faker->imageUrl(400,400,'Products'),
            'brand' => $this->faker->randomElement(['Nike','Addidas']),
            'title' => $this->faker->words(3,true),
            'rating' => $this->faker->randomFloat(1,3,5),
            'reviews' => $this->faker->numberBetween(0,500),
            'sellPrice' => $this->faker->numberBetween(0,500),
            'orders' => $this->faker->numberBetween(0,100),
            'mrp' => $this->faker->randomFloat(2,50,300),
            'discount' => $this->faker->numberBetween(5,50),
            'category' => $this->faker->randomElement(['women','men','kids','child'])
        ];
    }
}
