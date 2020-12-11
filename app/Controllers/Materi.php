<?php

namespace App\Controllers;


class Materi extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Materi'
    ];
    return view('admin/materi/materi_v', $data);
  }
}
