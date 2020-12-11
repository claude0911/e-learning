<?php

namespace App\Models;

use CodeIgniter\Model;

class pstudiModel extends Model
{
  public function programstudi()
  {
    return $this->db->table('programstudi')
      ->join('prodi', 'prodi.id_prodi = programstudi.id_prodi')
      ->join('jenjang', 'jenjang.id_jenjang = programstudi.id_jenjang')
      ->join('dosen', 'dosen.id_dosen = programstudi.id_dosen')
      ->get()->getResultArray();
  }
}
