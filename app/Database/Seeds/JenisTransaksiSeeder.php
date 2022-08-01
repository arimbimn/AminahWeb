<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisTransaksiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [

                'jenis_transaksi' => 'Pembayaran Pendanaan',
            ],

            [

                'jenis_transaksi' => 'Pembayaran bagi hasil',
            ],

            [

                'jenis_transaksi' => 'Penarikkan saldo lender',
            ],

            [

                'jenis_transaksi' => 'Penarikkan pendanaan borrower',
            ],

            [

                'jenis_transaksi' => 'Penarikkan dana admin',
            ],

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('jenis_transaksi')->insertBatch($data);
    }
}
