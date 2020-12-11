<?php

namespace App\Controllers;

class Dosen extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'List Dosen',
      'dosen' => $this->dosenModel->datadosen()
    ];
    return view('admin/dosen/list_v', $data);
  }

  public function tambahdosen()
  {
    $validated = $this->validate([
      'file_upload' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,4096]'
    ]);
    if ($validated == FALSE) {
      // Kembali ke function index supaya membawa data uploads dan validasi
      return $this->index();
    } else {
      $avatar = $this->request->getFile('gambar');
      $avatar->move(ROOTPATH . 'public/uploads');
      $this->dosenModel->save([
        'nip' => $this->request->getVar('nip'),
        'nama_dosen' => $this->request->getVar('nama_dosen'),
        'gambar' => $avatar->getName(),
        // 'alamat' => $this->request->getVar('alamat'),
        // 'telp' => $this->request->getVar('telp'),
        'level' => '3'
      ]);
      session()->setFlashdata('message', alert2('success', 'Data Berhasil Ditambahkan'));
      return redirect()->to('/Dosen');
    }
  }
}
