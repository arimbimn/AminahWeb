<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataNamaBank extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bank' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_bank' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_bank', true);
        $this->forge->createTable('data_nama_bank');
    }

    public function down()
    {
        $this->forge->dropTable('data_nama_bank');
    }
}
