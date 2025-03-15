<?php

namespace Database\Factories;

use App\Models\Superhero;
use App\Models\Gender;
use App\Models\Universe;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuperheroFactory extends Factory
{
    protected $model = Superhero::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'gender_id' => Gender::inRandomOrder()->first()->id ?? Gender::factory(),
            'universe_id' => Universe::inRandomOrder()->first()->id ?? Universe::factory(),
        ];
    }
}
