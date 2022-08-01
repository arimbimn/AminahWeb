<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LenderSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'status_lender' => 'unverified',
            'nama_lender' => 'Indra',
            'foto_lender' => 'trainer-1.jpg',
            'email_lender' => 'indra@gmail.com',
            'nomor_hp_lender' => '082738465',
            'nik_lender' => '726354766281',
            'nama_pemilik_rekening' => 'Indra',
            'nomor_rekening' => '666666',
            'nama_bank' => 'BCA',

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('data_lender')->insert($data);
    }
}
