<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisUsahaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [

                'jenis_usaha' => 'makanan',
            ],

            [

                'jenis_usaha' => 'minuman',
            ],

            [

                'jenis_usaha' => 'jasa',
            ],

            [

                'jenis_usaha' => 'sembako',
            ],

            [

                'jenis_usaha' => 'jajanan',
            ],
            [

                'jenis_usaha' => 'elektronik',
            ],
            [

                'jenis_usaha' => 'material',
            ],
            [

                'jenis_usaha' => 'lainnya',
            ],

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('data_jenis_usaha')->insertBatch($data);
    }
}
