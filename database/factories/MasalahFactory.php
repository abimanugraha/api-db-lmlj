<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MasalahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nolmlj' => $this->faker->unique()->numerify('UNIT-LMLJ/##/22/-###'),
            'produk_id' => $this->faker->numberBetween(1, 9),
            'komponen_id' => $this->faker->numberBetween(1, 29),
            'unit_id' => $this->faker->numberBetween(1, 9),
            'masalah' => $this->faker->sentence(3),
            'nilai_tambah' => $this->faker->sentence(5),
            'urgensi' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 3),
            'status' => $this->faker->numberBetween(0, 1),
            'keterangan' => $this->faker->sentence(6),
        ];
    }
}
