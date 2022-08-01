<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [

                'jenis_status' => 'verified',
            ],

            [

                'jenis_status' => 'unverified',
            ],

            [

                'jenis_status' => 'rejected',
            ],

            [

                'jenis_status' => 'accepted',
            ],

            [

                'jenis_status' => 'pending',
            ],

            [

                'jenis_status' => 'lunas',
            ],

            [

                'jenis_status' => 'belum lunas',
            ],

            [

                'jenis_status' => 'gagal bayar',
            ],



        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('status')->insertBatch($data);
    }
}
