<?php

namespace App\Database\Seeds;

class ProdiSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            0 => [
                'nama_prodi' => 'Teknik Informatika',
                'kode_prodi' => 'IF'
            ],
            1 => [
                'nama_prodi' => 'Manajemen Informatika',
                'kode_prodi' => 'MI'
            ],
            2 => [
                'nama_prodi' => 'Komputer Akuntansi',
                'kode_prodi' => 'KA'
            ]
        ];
        foreach ($data as $r) {
            $this->db->table('prodi')->insert($r);
        }
    }
}
