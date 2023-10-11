<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Admin Team DPP',
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password'    => password_hash("coba12345", PASSWORD_DEFAULT),
            'role'    => 'admin',
        ];

        $this->db->table('users')->insert($data);
    }
}
