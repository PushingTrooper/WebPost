<?php

namespace Database\Factories;

use App\Models\Pagesa;
use Illuminate\Database\Eloquent\Factories\Factory;

class PagesaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pagesa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pagese_id' => $this->faker->numberBetween(0, 140980676),
            'shuma' => $this->faker->numberBetween(0, 700),
            'kryer' => 0,
            'nga_derguesi' => 1,
            'data_pagimit' => $this->faker->dateTime
        ];
    }
}
