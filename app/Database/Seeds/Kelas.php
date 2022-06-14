<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kelas extends Seeder
{
    public function run()
    {
        $users_data = [
            [
                'id_kelas' => '17',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '16',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '15',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '14',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '13',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '12',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '11',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '10',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '9',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '8',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '7',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '6',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '5',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '4',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '3',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '2',
                'tunkin' => '0'
            ],
            [
                'id_kelas' => '1',
                'tunkin' => '0'
            ],
        ];

        foreach ($users_data as $data) {
            $this->db->table('kelas')->insert($data);
        }
    }
}
