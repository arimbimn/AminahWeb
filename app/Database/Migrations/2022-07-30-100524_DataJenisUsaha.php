<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataJenisUsaha extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis_usaha' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_usaha' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_jenis_usaha', true);
        $this->forge->createTable('data_jenis_usaha');
    }

    public function down()
    {
        $this->forge->dropTable('data_jenis_usaha');
    }
}
