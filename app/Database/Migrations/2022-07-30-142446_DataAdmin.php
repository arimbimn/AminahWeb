<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_admin' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'foto_admin' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('data_admin');
    }

    public function down()
    {
        $this->forge->dropTable('data_admin');
    }
}
