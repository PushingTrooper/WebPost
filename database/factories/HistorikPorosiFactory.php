<?php

namespace Database\Factories;

use App\Models\HistorikPorosi;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistorikPorosiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HistorikPorosi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status_porosi_id' => $this->faker->numberBetween(0, 140980676),
            'status_id' => $this->faker->numberBetween(0, 140980676),
            'magazine_id' => $this->faker->numberBetween(0, 140980676),
            'perdorues_id' => $this->faker->numberBetween(0, 140980676),
            'data_krijimit' => $this->faker->dateTime
        ];
    }
}
