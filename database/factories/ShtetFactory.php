<?php

namespace Database\Factories;

use App\Models\Shtet;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShtetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shtet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shtet_id' => $this->faker->numberBetween(0, 140980676),
            'emer' => $this->faker->name
        ];
    }
}
