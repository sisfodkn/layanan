<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ruangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ruangan' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_ruangan' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'lantai' => [
                'type' => 'enum',
                'constraint' => ['3', '4', '5', '5a', '5b'],
                'default' => null
            ],
            'lokasi' => [
                'type' => 'enum',
                'constraint' => ['Merdeka Barat 15', 'Juanda 36'],
                'default' => null
            ]
        ]);

        $this->forge->addPrimaryKey('id_ruangan');

        $this->forge->createTable('ruangan');
    }

    public function down()
    {
        $this->forge->dropTable('ruangan');
    }
}
