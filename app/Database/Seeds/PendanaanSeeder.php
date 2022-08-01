<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PendanaanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'status_pendanaan' => 'lunas',
            'status_transaksi' => 'berhasil',
            'jumlah_dana_pengajuan' => '10000000',
            'pendapatan_perbulan' => '3000000',
            'jumlah_dana_disetujui' => '8000000',
            'jangka_waktu' => '12 bulan',

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('data_pendanaan')->insert($data);
    }
}
