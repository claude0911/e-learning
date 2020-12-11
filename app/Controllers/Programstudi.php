<?php

namespace App\Controllers;

use App\Models\pstudiModel;

class Programstudi extends BaseController
{
  protected $pstudiModel;
  public function __construct()
  {
    $this->pstudiModel = new pstudiModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Program Studi',
      'pstudi' => $this->pstudiModel->programstudi()
    ];
    return view('admin/programstudi/programstudi_v', $data);
  }
}
