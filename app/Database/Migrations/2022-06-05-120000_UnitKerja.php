<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UnitKerja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_unit' => [
                'type' => 'int',
                'unsigned' => true
            ],
            'nama_unit' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'parent_id' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id_unit');
        $this->forge->createTable('unit_kerja');
    }

    public function down()
    {
        $this->forge->dropTable('unit_kerja');
    }
}
