<?php

namespace App\Database\Seeds;

class JenjangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            0 => [
                'nama_jenjang' => 'Diploma-3',
                'kode_jenjang' => 'D3'
            ],
            1 => [
                'nama_jenjang' => 'Strata-1',
                'kode_jenjang' => 'S1'
            ],  
        ];
        foreach ($data as $r) {
            $this->db->table('jenjang')->insert($r);
        }
    }
}
