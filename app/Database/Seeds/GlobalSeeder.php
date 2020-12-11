<?php

namespace App\Database\Seeds;

class GlobalSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('ProdiSeeder');
        $this->call('KonsentrasiSeeder');
        $this->call('JenjangSeeder');
    }
}
