<?php

namespace App\Controllers;


class test2 extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'test2'
    ];
    return view('admin/dosen/test2_v', $data);
  }
}
