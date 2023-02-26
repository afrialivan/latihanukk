<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengaduanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = mt_rand(1,3);
        if($status == 1 ) {
            $status = '0';
        }
        if($status == 2 ) {
            $status = 'proses';
        }
        if($status == 3 ) {
            $status = 'selesai';
        }
        // $status = 'proses';

        return [
            'id_user' => 1,
            'judul_pengaduan' => $this->faker->sentence(mt_rand(3, 8)),
            'tgl_pengaduan' => now(),
            'isi_laporan' => $this->faker->paragraph(mt_rand(50, 80)),
            'foto' => 'public/img/NoVZXF5bQoMAIG1F1yLAzNpYMZW6znXTAmtCX6ac.png',
            'status' => $status

        ];
        // return [
        //     'name' => $this->faker->name(),
        //     'email' => $this->faker->unique()->safeEmail(),
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ];
    }
}
