<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kelas' => [
                'type' => 'int',
                'unsigned' => true
            ],
            'tunkin' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id_kelas');

        $this->forge->createTable('kelas');
    }

    public function down()
    {
        $this->forge->dropTable('kelas');
    }
}
