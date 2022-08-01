<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'status_transaksi' => 'lunas',
            'jenis_transaksi' => 'Pembayaran bagi hasil',
            'jumlah_transaksi' => '500000',
            'nama_pengirim' => 'Dayum Setiawati',
            'nama_penerima' => 'Indra',
            'nama_bank' => 'BCA',
            'no_rek_penerima' => '666666',
            'no_rek_pengirim' => '000000',

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('data_transaksi')->insert($data);
    }
}
