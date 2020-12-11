<?php

namespace App\Controllers;


class test1 extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'test1'
    ];
    return view('admin/dosen/test1_v', $data);
  }
}
