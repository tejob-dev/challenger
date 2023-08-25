<?php

namespace Database\Factories;

use App\Models\Parraine;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParraineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Parraine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomprep' => $this->faker->text(255),
            'eamilp' => $this->faker->email,
            'telephonp' => $this->faker->text(255),
            'nomprepp' => $this->faker->email,
            'emailpp' => $this->faker->email,
            'telephonpp' => $this->faker->email,
        ];
    }
}
