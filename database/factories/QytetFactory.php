<?php

namespace Database\Factories;

use App\Models\Qytet;
use Illuminate\Database\Eloquent\Factories\Factory;

class QytetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Qytet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'qytet_id' => $this->faker->numberBetween(0, 140980676),
            'shtet_id' => $this->faker->numberBetween(0, 140980676),
            'emer' => $this->faker->name
        ];
    }
}
