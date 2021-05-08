<?php

namespace Database\Factories;

use App\Models\Marres;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Marres::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marres_id' => $this->faker->numberBetween(0, 140980676),
            'qytet_id' => $this->faker->numberBetween(0, 140980676),
            'emer' => $this->faker->name,
            'mbiemer' => $this->faker->name,
            'adrese' => $this->faker->sentence(5)
        ];
    }
}
