<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
  protected $table = "dosen";
  protected $primaryKey = "id_dosen";
  protected $allowedFields = ['nip', 'nama_dosen', 'alamat', 'telp', 'goldar', 'gambar'];
  public function datadosen($nip = false)
  {
    if ($nip == false) {
      $mhs = $this->table($this->table)
        ->paginate(8);
      return $mhs;
    }
    // detail persiswa
    $y = $this->table($this->table)
      ->where(['nip' => $nip])->first();
    return $y;
  }
  public function cari($key)
  {
    return $this->table($this->table)
      ->orLike('nama_dosen', $key);
  }
}
