<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = "user";

  protected $useTimestamps = true;
  protected $allowedFields = ['username', 'email', 'password', 'level'];

  public function cek_login($email)
  {
    $query = $this->table('user')
      ->where('email', $email)
      ->countAll();

    if ($query >  0) {
      $hasil = $this->table('user')
        ->where('email', $email)
        ->limit(1)
        ->get()
        ->getRowArray();
    } else {
      $hasil = array();
    }
    return $hasil;
  }

  public function register($dataregister)
  {
    return $this->db->table($this->table)->insert($dataregister);
  }
}
