<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BorrowerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'status' => 'accepted',
                'nama_usaha' => 'Laundry Keisya',
                'jenis_usaha' => 'Jasa',
                'email_borrower' => 'Keisyana@gmail.com',
                'nomor_hp_borrower' => '08555151515',
                'nama_borrower' => 'Keisyana',
                'nama_pemilik_rekening' => 'Nugroho',
                'nomor_rekening' => '666666',
                'nama_bank' => 'BCA',
                'pendapatan_perbulan' => '8000000',
                'pengajuan_awal' => '30000000',
            ],
            $data = [
                'status' => 'denied',
                'nama_usaha' => 'Silkysip',
                'jenis_usaha' => 'minuman',
                'email_borrower' => 'aisyah@gmail.com',
                'nomor_hp_borrower' => '0873838326',
                'nama_borrower' => 'Aisyah',
                'nama_pemilik_rekening' => 'Aisyah',
                'nomor_rekening' => '123456',
                'nama_bank' => 'BRI',
                'pendapatan_perbulan' => '3000000',
                'pengajuan_awal' => '20000000',
            ],

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('data_borrower')->insertBatch($data);
    }
}
