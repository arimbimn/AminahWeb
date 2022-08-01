<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisTransaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis_transaksi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_transaksi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_jenis_transaksi', true);
        $this->forge->createTable('jenis_transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_transaksi');
    }
}
