<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Challengerpro;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChallengerproFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Challengerpro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomentr' => $this->faker->name(),
            'telephone' => $this->faker->phoneNumber,
            'creation' => $this->faker->date,
            'nompredirig' => $this->faker->name(),
            'typeprog' => 'Programme en cours',
            'objectif' => 'Des clients',
            'messagacquis' => $this->faker->sentence(20),
            'rdventre' => $this->faker->date,
        ];
    }
}
