<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home',
			'jumlahmhs' => $this->mhsModel->jumlah()
		];

		return view('admin/dashboard/dash_v', $data);
	}
}
