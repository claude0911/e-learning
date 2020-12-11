<?php

namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {
    $data = [
      'username'  => 'admin',
      'email'     => 'admin@admin.com',
      'password'  => '$2y$10$6awKnpMAIlZEs.NrlM57EObckYG5/wsfbGY86dvce21ZKn3LK/nVG',
      'level'     => '1'
    ];
    $this->db->table('user')->insert($data);
    $data2 = [
      'username'  => 'user',
      'email'     => 'user@user.com',
      'password'  => '$2y$10$6awKnpMAIlZEs.NrlM57EObckYG5/wsfbGY86dvce21ZKn3LK/nVG',
      'level'     => '2'
    ];
    $this->db->table('user')->insert($data2);
    $data3 = [
      'username'  => 'dosen',
      'email'     => 'dosen@dosen.com',
      'password'  => '$2y$10$6awKnpMAIlZEs.NrlM57EObckYG5/wsfbGY86dvce21ZKn3LK/nVG',
      'level'     => '3'
    ];
    $this->db->table('user')->insert($data3);
  }
}
