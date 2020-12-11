<?php

namespace App\Controllers;

use App\Models\UserModel;
use phpDocumentor\Reflection\Types\False_;

class User extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        helper(['app_helper']); # before retun to view.
        $this->cek_login();
        $this->userModel = new UserModel();
    }

    public function login()
    {
        if ($this->cek_login() == TRUE) {
            return redirect()->to('/');
        }
        echo view('/');
    }

    public function proses_login()
    {
        // $validation =  \Config\Services::validation();

        // $email  = $this->request->getVar('email');
        // $pass   = $this->request->getVar('password');

        // $data = [
        //     'email' => $email,
        //     'password' => $pass
        // ];

        // if ($validation->run($data, 'authlogin') == FALSE) {
        //     session()->setFlashdata('errors', $validation->getErrors());
        //     return redirect()->to('/');
        // } else {

        //     $cek_login = $this->userModel->cek_login($email);
        //     // email didapatkan
        //     if ($cek_login == TRUE) {
        //         // jika email dan password cocok
        //         if (password_verify($pass, $cek_login['password'])) {
        //             session()->set('email', $cek_login['email']);
        //             session()->set('username', $cek_login['username']);
        //             session()->set('level', $cek_login['level']);
        //             session()->setFlashdata('message', alert('success', 'Berhasil login'));
        //             return redirect()->to('/');
        //             // email cocok, tapi password salah
        //         } else {
        //             session()->setFlashdata('message', alert('error', 'Password yang Anda masukan salah'));
        //             return redirect()->to('/');
        //         }
        //     } else {
        //         // email tidak cocok / tidak terdaftar
        //         session()->setFlashdata('message', alert('error', 'Email yang Anda masukan tidak terdaftar'));
        //         return redirect()->to('/');
        //     }
        // }
        $email = htmlspecialchars($this->request->getVar('email'));
        $password = htmlspecialchars($this->request->getVar('password'));

        $cek_login = $this->userModel->cek_Login($email);

        if ($cek_login == TRUE) {
            if (password_verify($password, $cek_login['password'])) {
                session()->set('id', $cek_login['id']);
                session()->set('username', $cek_login['username']);
                session()->set('email', $cek_login['email']);
                session()->set('level', $cek_login['level']);
                // session()->set("password", $cek_login['password']);
                if (session()->get('level') == 1) {
                    // login admin
                    session()->setFlashdata('message', alert('success', 'Kamu berhasil login sebagai admin :)'));
                    return redirect()->to('/dashboard');
                } elseif (session()->get('level') == 3) {
                    // login dosen
                    return redirect()->to('/');
                } elseif (session()->get('level') == 2) {
                    // mahasiswa
                    return redirect()->to('/');
                }
            } else {
                session()->setFlashdata('message', alert('error', 'Password salah periksa lagi ya'));
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('message', alert('error', 'Email salah ato gak ada, periksa lagi ya'));
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy('level');
        return redirect()->to('/');
    }


    // public function register()
    // {
    //     $validation = \Config\Services::validation();

    //     $dataregister = [
    //         'username' => $this->request->getVar('username'),
    //         'email' => $this->request->getVar('email'),
    //         'password' => $this->request->getVar('password'),
    //         'password_confirm' => $this->request->getVar('password_confirm')
    //     ];
    //     if ($validation->run($dataregister, 'register') == FALSE) {
    //         session()->setFlashdata('errors', $validation->getErrors());
    //         session()->setFlashdata('inputs', $this->request->getVar());
    //         return redirect()->to('/register')->withInput();
    //     } else {
    //         $datareg = [
    //             'username' => $this->request->getVar('username'),
    //             'email' => $this->request->getVar('email'),
    //             'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
    //             'level' => '2'
    //         ];
    //         dd($datareg);
    //         $simpan = $this->userModel->register($datareg);

    //         if ($simpan) {
    //             session()->setFlashdata('success_register', 'Register berhasil coba login, kalo gak bisa hubungi admin ya');
    //             return redirect()->to('/register');
    //         }
    //     }
    // }
    public function tambah()
    {
        $this->userModel->save([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'level' => $this->request->getVar('level')
        ]);

        return redirect()->to('/register');
    }
}
