<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataPendanaan extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'id_pendanaan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'status_pendanaan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'status_transaksi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'tgl_pendanaan' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'tgl_jatuh_tempo' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'jumlah_dana_pengajuan' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'pendapatan_perbulan' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'jumlah_dana_disetujui' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'nama_pengirim' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'jangka_waktu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nama_pendana' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'bagi_hasil' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'jumlah_pembayaran' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'keterangan' => [
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
        $this->forge->addKey('id_pendanaan', true);
        $this->forge->createTable('data_pendanaan');

        $fields = [
            'dana_terkumpul' => ['type' => 'INT', 'null' => true, 'after' => 'jumlah_dana_disetujui'],
        ];

        $this->forge->addColumn('data_pendanaan', $fields);
    }

    public function down()
    {
        $this->forge->dropTable('data_pendanaan');
    }
}
