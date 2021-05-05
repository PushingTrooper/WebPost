<?php

namespace Database\Factories;

use App\Models\Perdorues;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerdoruesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Perdorues::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'perdorues_id' => $this->faker->uuid,
            'magazine_id' => $this->faker->uuid,
            'rol_id' => $this->faker->uuid,
            'qytet_id' => $this->faker->uuid,
            'email' => $this->faker->email,
            'emri' => $this->faker->name,
            'mbiemri' => $this->faker->name,
            'paga' => $this->faker->numberBetween(0, 700),
            'foto_profili' => $this->faker->imageUrl(),
            'adrese' => $this->faker->sentence(5),
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'kerkuar_ndryshim_fjalekalimi' => 0
        ];
    }
}
