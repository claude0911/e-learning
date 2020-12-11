<?php

namespace App\Database\Seeds;

class KonsentrasiSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            0 => [
                'nama_konsentrasi' => 'Sistem Informasi',
                'kode_konsentrasi' => 'SI'
            ],
            1 => [
                'nama_konsentrasi' => 'Komputer Akuntansi Perpajakan',
                'kode_konsentrasi' => 'KAPJ'
            ],
            2 => [
                'nama_konsentrasi' => 'Komputer Akuntansi Perbankan',
                'kode_konsentrasi' => 'KAPB'
            ]
        ];
        foreach ($data as $r) {
            $this->db->table('konsentrasi')->insert($r);
        }
    }
}
