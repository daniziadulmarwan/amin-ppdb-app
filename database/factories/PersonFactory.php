<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'jenjang' => mt_rand(1, 2),
            'is_pesantren' => mt_rand(0, 1),
            'tahun_ppdb' => mt_rand(2022, 2028),
            'gender' => mt_rand(1, 2),
            'hobi' => mt_rand(1, 6),
            'cita_cita' => mt_rand(1, 10),
            'pekerjaan_ayah' => mt_rand(1, 10),
            'penghasilan_ayah' => mt_rand(1, 7),
        ];
    }
}
