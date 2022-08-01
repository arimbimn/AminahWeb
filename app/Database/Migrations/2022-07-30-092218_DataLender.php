<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataLender extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_lender' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'status_lender' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nama_lender' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'foto_lender' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'foto_ktp_lender' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'email_borrower' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nomor_hp_borrower' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nik_lender' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'alamat_lender' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nama_pemilik_rekening' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nomor_rekening' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'nama_bank' => [
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
        $this->forge->addKey('id_lender', true);
        $this->forge->createTable('data_lender');

        $fields = [
            'email_lender' => [
                'name' => 'email_lender',
                'type' => 'TEXT',
            ],
        ];
        $this->forge->modifyColumn('data_lender', $fields);

        $fields = [
            'nomor_hp_borrower' => [
                'name' => 'nomor_hp_lender',
                'type' => 'TEXT',
            ],
        ];
        $this->forge->modifyColumn('data_lender', $fields);
    }

    public function down()
    {
        $this->forge->dropTable('data_lender');
    }
}
