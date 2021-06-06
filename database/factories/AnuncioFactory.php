<?php

namespace Database\Factories;

use App\Models\Anuncio;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnuncioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Anuncio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'type_id' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 500, 7000),
            'image' => $this->faker->imageUrl(600, 600, 'technics')
       ];
    }
}
