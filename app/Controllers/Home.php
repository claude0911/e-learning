<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home'
		];

		return view('halaman/content', $data);
	}
	public function register()
	{
		$data = [
			'title' => 'Register'
		];

		return view('auth/register', $data);
	}
	public function admin()
	{
		return view('auth/login_admin');
	}

	public function admindas()
	{
		return view('admin/ad');
	}
	public function Loginas()
	{
		return view('auth/login');
	}
	public function LoginMhs()
	{
		return view('auth/login/loginmhs');
	}
	public function LoginDosen()
	{
		return view('auth/login/logindosen');
	}
}
