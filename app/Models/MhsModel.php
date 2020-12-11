<?php

namespace App\Models;

use CodeIgniter\Model;

class MhsModel extends Model
{
  protected $table = "mahasiswa";
  protected $primaryKey = "id_mahasiswa";
  protected $allowedFields = ['nim', 'nama_mahasiswa', 'id_prodi', 'id_konsentrasi', 'id_jenjang', 'gambar'];
  public function datamahasiswa($nim = false)
  {
    if ($nim == false) {
      $mhs = $this->table($this->table)
        ->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi')
        ->join('konsentrasi', 'konsentrasi.id_konsentrasi = mahasiswa.id_konsentrasi')
        ->join('jenjang', 'jenjang.id_jenjang = mahasiswa.id_jenjang')
        // ->join('user', 'user.email=mahasiswa.email')
        ->paginate(8);
      return $mhs;
    }
    // detail persiswa
    // $y = $this->table($this->table)
    //   ->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi')
    //   ->join('konsentrasi', 'konsentrasi.id_konsentrasi = mahasiswa.id_konsentrasi')
    //   ->join('jenjang', 'jenjang.id_jenjang = mahasiswa.id_jenjang')
    //   ->join('user', 'user.nip_nim = mahasiswa.nip_nim')
    //   ->where(['nip_nim' => $nim])->first();
    // return $y;
  }
  public function cari($key)
  {
    return $this->table($this->table)
      ->like('nama_mahasiswa', $key)->orLike('nim', $key);
  }
  public function jumlah()
  {
    return $this->table($this->table)
      ->countAllResults();
  }
}
