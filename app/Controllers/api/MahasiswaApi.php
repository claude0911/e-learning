<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class MahasiswaApi extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\MhsModel';

    public function index()
    {
        return $this->respond($this->model->datamahasiswa(), 200);
    }

    public function create()
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
            $data = [
                'nim' => $this->request->getVar('nim'),
                'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
                'gambar' => $avatar->getName(),
                'id_prodi' => $this->request->getVar('id_prodi'),
                'id_konsentrasi' => $this->request->getVar('id_konsentrasi'),
                'id_jenjang' => $this->request->getVar('id_jenjang'),
                'level' => '2'
            ];
            $data = json_decode(file_get_contents("php://input"));
            //$data = $this->request->getPost();
            $this->mhsModel->insert($data);
            $response = [
                'status'   => 201,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Saved'
                ]
            ];
        }
        return $this->respondCreated($data, 201);
    }
    public function update($id = null)
    {
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'nim' => $json->product_name,
                'nama_mahasiswa     ' => $json->product_price
            ];
        } else {
            $input = $this->request->getRawInput();
            $data = [
                'product_name' => $input['product_name'],
                'product_price' => $input['product_price']
            ];
        }
        // Insert to Database
        $this->mhsModel->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }
}
