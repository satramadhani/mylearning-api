<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id_user' => 1,
            'username' => 'Admin',
            'password' => password_hash('Admin#1234', PASSWORD_DEFAULT),
        ];

        // Using query builder.
        $this->db->table('users')->insert($data);
    }
}