<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Jabatan extends Seeder
{
    public function run()
    {
        $jabatan_data = [
            [
                'nama_jabatan' => 'Administrator'
            ]
        ];

        foreach ($jabatan_data as $data) {
            $this->db->table('jabatan')->insert($data);
        }
    }
}
