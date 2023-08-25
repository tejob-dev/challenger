<?php

namespace Database\Factories;

use App\Models\Acquereur;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcquereurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Acquereur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nompre' => $this->faker->text(255),
            'telephone' => $this->faker->text(255),
            'email' => $this->faker->email,
            'typlog' => 'Villa basse',
            'emplacement' => $this->faker->text(255),
            'nbrpiece' => 'Studio',
            'budget' => $this->faker->randomNumber,
            'apporinit' => $this->faker->randomNumber,
            'engagannee' => $this->faker->randomNumber,
            'peopletype' => $this->faker->text(255),
            'nbrannee' => '7 ans',
            'result1' => $this->faker->text(255),
            'result2' => $this->faker->text(255),
            'result3' => $this->faker->text(255),
        ];
    }
}
