<?php

namespace App\Controllers;

class Log extends BaseController
{
  public function index()
  {
    return view('admin/log/log');
  }
}
