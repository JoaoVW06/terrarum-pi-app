<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destino>
 */
class DestinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=>"". $this->faker->word." ". 
            $this->faker->numberBetween($int1 = 0, $int2 = 99999),
            'coordenadas'=>"". $this->faker->word." ".
            $this->faker->numberBetween($int1 = 0, $int2 = 99999)
            //
        ];
    }
}
