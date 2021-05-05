<?php

namespace Database\Factories;

use App\Models\Magazine;
use Illuminate\Database\Eloquent\Factories\Factory;

class MagazineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Magazine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'magazine_id' => $this->faker->uuid,
            'emer' => $this->faker->name,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude
        ];
    }
}
