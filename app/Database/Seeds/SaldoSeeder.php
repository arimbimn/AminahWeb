<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SaldoSeeder extends Seeder
{
    public function run()
    {
        $data = [


            'jumlah_saldo' => '1000000',



        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('saldo')->insert($data);
    }
}
