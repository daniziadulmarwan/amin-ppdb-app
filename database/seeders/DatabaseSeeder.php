<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use App\Models\SettingTime;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Person::factory(200)->create();

        SettingTime::create(['waktu' => 1]);

        Pendaftaran::factory(10)->create();

        // User::create([
        //     'name' => 'Imam Turmudi',
        //     'username' => '1122334455',
        //     'password' => bcrypt('1122334455'),
        //     'role' => 'admin'
        // ]);

        User::create([
            'name' => 'Dani Ziadul Marwan',
            'username' => '2233445566',
            'password' => bcrypt('2233445566'),
            'role' => 'admin'
        ]);
    }
}
