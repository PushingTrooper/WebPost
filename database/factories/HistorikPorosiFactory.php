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
            'status_porosi_id' => $this->faker->uuid,
            'status_id' => $this->faker->uuid,
            'magazin_id' => $this->faker->uuid,
            'perdorues_id' => $this->faker->uuid,
            'data_krijimit' => $this->faker->dateTime
        ];
    }
}
