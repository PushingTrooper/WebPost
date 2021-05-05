<?php

namespace Database\Factories;

use App\Models\Porosi;
use Illuminate\Database\Eloquent\Factories\Factory;

class PorosiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Porosi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'porosi_id' => $this->faker->uuid,
            'status_porosi_id' => $this->faker->uuid,
            'pagese_id' => $this->faker->uuid,
            'marres_id' => $this->faker->uuid,
            'gjurmim_id' => $this->faker->uuid,
            'tipi' => 'paketë',
            'tipi_dergeses' => 'normal',
            'koment' => ''
        ];
    }
}
