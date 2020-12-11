<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
	public function index()
	{
		if (!$this->validate([])) {
			$key = $this->request->getVar('key');
			if ($key) {
				$search = $this->mhsModel->cari($key);
			} else {
				$search = $this->mhsModel;
			}
			$data = [
				'title' => 'Data Mahasiswa',
				'mahasiswa' => $search->datamahasiswa(),
				'prodi' => $this->prodiModel->findAll(),
				'konsentrasi' => $this->konsentrasiModel->findAll(),
				'jenjang' => $this->jenjangModel->findAll(),
				'pager' => $this->mhsModel->pager,
				'validation' => $this->validator
			];
			return view('admin/mahasiswa/mahasiswa_v', $data);
		}
	}

	// public function tambahmhs()
	// {
	// 	$validated = $this->validate([
	// 		'file_upload' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,4096]'
	// 	]);
	// 	if ($validated == FALSE) {
	// 		// Kembali ke function index supaya membawa data uploads dan validasi
	// 		return $this->index();
	// 	} else {
	// 		$avatar = $this->request->getFile('gambar');
	// 		$avatar->move(ROOTPATH . 'public/uploads');
	// 		$this->mhsModel->save([
	// 			'nim' => $this->request->getVar('nim'),
	// 			'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
	// 			'gambar' => $avatar->getName(),
	// 			'id_prodi' => $this->request->getVar('id_prodi'),
	// 			'id_konsentrasi' => $this->request->getVar('id_konsentrasi'),
	// 			'id_jenjang' => $this->request->getVar('id_jenjang'),
	// 			'level' => '2',

	// 		]);
	// 		$user = [
	// 			'username' => $this->request->getVar('username'),
	// 			'email' => $this->request->getVar('email'),
	// 			'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
	// 		];
	// 		$this->mhsModel->saveUser($user);
	// 		session()->setFlashdata('message', alert2('success', 'Data Berhasil Ditambahkan'));
	// 		return redirect()->to('/mahasiswa');
	// 	}
	// }

	public function delete($nim)
	{
		$this->mhsModel->delete($nim);
		session()->setFlashdata('message', alert2('success', 'Data Berhasil Dihapus'));
		return redirect()->to('/mahasiswa');
	}

	public function update($id)
	{
		$this->mhsModel->save([
			'id_mahasiswa' => $id,
			'nim' => $this->request->getVar('nim'),
			'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
			'id_prodi' => $this->request->getVar('id_prodi'),
			'id_konsentrasi' => $this->request->getVar('id_konsentrasi'),
			'id_jenjang' => $this->request->getVar('id_jenjang'),
			'level' => '2'
		]);
		session()->setFlashdata('message', alert2('success', 'Data Berhasil Diubah'));
		return redirect()->to('/mahasiswa');
	}
}
