<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BankSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [

                'nama_bank' => 'BCA',
            ],

            [

                'nama_bank' => 'BRI',
            ],

            [

                'nama_bank' => 'BTN',
            ],

            [

                'nama_bank' => 'MANDIRI',
            ],

            [

                'nama_bank' => 'BNI',
            ],

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('data_nama_bank')->insertBatch($data);
    }
}
