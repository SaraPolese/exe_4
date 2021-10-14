<?php

namespace Database\Factories;

use App\Models\Therapie;
use Illuminate\Database\Eloquent\Factories\Factory;

class TherapieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Therapie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sujet'=>$this->faker->text,
            'tarif'=>$this->faker->randomFloat(2, 1, 10),
            'statut'=>$this->faker->numberBetween(0,1),
        ];
    }
}
