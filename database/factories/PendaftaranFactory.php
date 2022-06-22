<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftaran>
 */
class PendaftaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reg_number' => Str::upper('pb' . date('Y') . '-' . Str::random(8)),
            'jenjang' => mt_rand(1, 2),
            'is_pesantren' => mt_rand(1, 2),
            'tahun_lulus' => mt_rand(2020, 2022),
            'jenis_pendaftaran' => mt_rand(1, 2),
            'tahun_ppdb' => date('Y'),
            'fullname' => $this->faker->name(),
            'nisn' => '12233435456546',
            'nik' => '12233435456546',
            'gender' => mt_rand(1, 2),
            'born_place' => $this->faker->city(),
            'born_date' => $this->faker->dateTime('Y-m-d'),
            'jumlah_saudara' => mt_rand(1, 8),
            'anak_ke' => mt_rand(1, 8),
            'hobi' => mt_rand(1, 6),
            'agama' => mt_rand(1, 6),
            'status_keluarga' => mt_rand(1, 6),
            'cita_cita' => mt_rand(1, 10),
            'wa_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'kode_pos' => mt_rand(12345, 67890),
            'rt' => mt_rand(01, 06),
            'rw' => mt_rand(01, 06),
            'province' => $this->faker->city(),
            'regency' => $this->faker->city(),
            'district' => $this->faker->city(),
            'village' => $this->faker->city(),
            'no_kk' => '1234567890',
            'nik_ayah' => '1234567890',
            'nama_ayah' => $this->faker->name(),
            'pekerjaan_ayah' => mt_rand(1, 10),
            'penghasilan_ayah' => mt_rand(1, 7),
            'nik_ibu' => '1234567890',
            'nama_ibu' => $this->faker->name(),
            'pekerjaan_ibu' => mt_rand(1, 10),
            'asal_sekolah' => $this->faker->state(),
            'seri_ijazah' => '',
            'kk' => $this->faker->date('Ymd'),
            'akte' => $this->faker->date('Ymd'),
            'foto' => '',
            'agree' => 'checked',
        ];
    }
}
