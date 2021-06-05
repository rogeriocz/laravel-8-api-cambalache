<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'type' => $this->faker->randomElement(['casa','carro','celular','laptop','table']),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween($min = 500, $max = 10000),


       ];
    }
}
