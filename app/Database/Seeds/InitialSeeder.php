<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitialSeeder extends Seeder
{
    public function run()
    {
        $this->call('KelasSeeder');
        $this->call('UnitKerjaSeeder');
        $this->call('JabatanSeeder');
        $this->call('PegawaiSeeder');
        $this->call('UsersSeeder');
    }
}
