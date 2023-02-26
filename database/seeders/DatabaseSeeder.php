<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use App\Models\User;
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
        Pengaduan::factory(20)->create();

        User::create([
            'nama' => 'A. Muh. Afrial Ivan Pratama',
            'username' => 'prall123',
            'password' => bcrypt('111'),
            'tlp' => '08980164685',
            'level' => 'masyarakat',
        ]);
        User::create([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('111'),
            'tlp' => '08980164625',
            'level' => 'admin',
        ]);
        User::create([
            'nama' => 'petugas',
            'username' => 'petugas',
            'password' => bcrypt('111'),
            'tlp' => '08980164675',
            'level' => 'petugas',
        ]);
    }
}
