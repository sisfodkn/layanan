<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $listData = [
            [
                'nip_nrp' => '0000000000',
                'nama_pegawai' => 'Administrator',
                'id_jabatan' => '1'
            ]
        ];

        foreach ($listData as $data) {
            $this->db->table('pegawai')->insert($data);
        }
    }
}
