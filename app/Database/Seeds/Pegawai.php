<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pegawai extends Seeder
{
    public function run()
    {
        $pegawai_data = [
            [
                'nip_nrp' => '0000000000',
                'nama_pegawai' => 'Administrator',
                'id_jabatan' => '1'
            ]
        ];

        foreach ($pegawai_data as $data) {
            $this->db->table('pegawai')->insert($data);
        }
    }
}
