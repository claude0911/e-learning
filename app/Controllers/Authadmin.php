<?php

namespace App\Controllers;

use App\Models\UserModel;
use phpDocumentor\Reflection\Types\False_;
// ini komentar
class Authadmin extends BaseController
{
  protected $userModel;
  public function __construct()
  {

    $this->userModel = new UserModel();
  }
  public function login()
  {
    if ($this->cek_login() == TRUE) {
      return redirect()->to('/as');
    }
    echo view('/ad');
  }

  public function proses_login()
  {
    $validation =  \Config\Services::validation();

    $email  = $this->request->getVar('email');
    $pass   = $this->request->getVar('password');

    $data = [
      'email' => $email,
      'password' => $pass
    ];

    if ($validation->run($data, 'authlogin') == FALSE) {
      session()->setFlashdata('errors', $validation->getErrors());
      return redirect()->to('/ad');
    } else {

      $cek_login = $this->userModel->cek_login($email);

      // email didapatkan
      if ($cek_login == TRUE) {

        // jika email dan password cocok
        if (password_verify($pass, $cek_login['password'])) {

          session()->set('email', $cek_login['email']);
          session()->set('firstname', $cek_login['firstname']);
          session()->set('level', $cek_login['level']);
          return redirect()->to('/as');
          // email cocok, tapi password salah
        } else {
          session()->setFlashdata('message', alert('error', 'Password yang Anda masukan salah'));
          return redirect()->to('/ad');
        }
      } else {
        // email tidak cocok / tidak terdaftar
        session()->setFlashdata('message', alert('error', 'Email yang Anda masukan tidak terdaftar'));
        return redirect()->to('/ad');
      }
    }
  }


  public function logout()
  {
    session()->destroy();
    return redirect()->to('/ad');
  }
}
