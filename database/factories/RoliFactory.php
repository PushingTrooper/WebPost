<?php

namespace Database\Factories;

use App\Models\Roli;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoliFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Roli::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rol_id' => $this->faker->numberBetween(0, 140980676),
            'emer' => $this->faker->name
        ];
    }
}
