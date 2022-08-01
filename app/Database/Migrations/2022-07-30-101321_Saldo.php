<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Saldo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_saldo' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jumlah_saldo' => [
                'type' => 'INT',
                'constraint' => 11,
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
        $this->forge->addKey('id_saldo', true);
        $this->forge->createTable('saldo');
    }

    public function down()
    {
        $this->forge->dropTable('saldo');
    }
}
