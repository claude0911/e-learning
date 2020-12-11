<?php

namespace App\Controllers\api;

use CodeIgniter\RESTful\ResourceController;

class DosenApi extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\DosenModel';

    public function index()
    {
        return $this->respond($this->model->datadosen(), 200);
    }
}
