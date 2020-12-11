<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
		'my_list' => '_list_errors'
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	/*	public $authlogin = [
		'email' => 'required|valid_email',
		'password' => 'required'
	];

	public $authlogin_errors = [
		'email' => [
			'required' => 'Emailnya diisi ya.',
			'valid_email' => 'Emailnya belum valid'
		],
		'password' => [
			'required' => 'Passwordnya isi juga.'
		]
	];

	public $authregister = [
		'email' => 'required|valid_email|is_unique[users.email]',
		'username' => 'required|alpha_numeric|is_unique[users.username]|min_length[8]|max_length[35]',
		'name' => 'required|alpha_numeric_space|min_length[3]|max_length[35]',
		'password' => 'required|string|min_length[8]|max_length[35]',
		'confirm_password' => 'required|string|matches[password]|min_length[8]|max_length[35]'
	];

	public $authregister_errors = [
		'email' => [
			'required'      => 'Emailnya isi ya',
			'valid_email'   => 'Emailnya belum valid',
			'is_unique'     => 'Emailnya sudah terdaftar'
		],
		'username' => [
			'required'      => 'Username wajib diisi ya',
			'alpha_numeric' => 'Username cuma boleh huruf sama angka doang',
			'is_unique'     => 'Usernamenya sudah terdaftar',
			'min_length'    => 'Username minimal 3 karakter',
			'max_length'    => 'Username maksimal 35 karakter'
		],
		'name' => [
			'required'              => 'Name wajib diisi',
			'alpha_numeric_spaces'  => 'Name cuma boleh huruf, angka sama spasi doang',
			'min_length'            => 'Name minimal 3 karakter',
			'max_length'            => 'Name maksimal 35 karakter'
		],
		'password' => [
			'required'      => 'Password wajib diisi',
			'string'        => 'Password cuma boleh huruf, angka, spasi sama karakter lain',
			'min_length'    => 'Password minimal 8 karakter',
			'max_length'    => 'Password maksimal 35 karakter'
		],
		'confirm_password' => [
			'required'      => 'Konfirmasi password wajib diisi',
			'string'        => 'Konfirmasi password cuma boleh huruf, angka, spasi sama karakter lain',
			'matches'       => 'Konfirmasi password harus sama kayak password ya',
			'min_length'    => 'Konfirmasi password minimal 8 karakter',
			'max_length'    => 'Konfirmasi password maksimal 35 karakter'
		]
	];*/
	public $authlogin = [
		'email'         => 'required|valid_email',
		'password' 		=> 'required'
	];

	public $authlogin_errors = [
		'email' => [
			'required' 	=> 'Email wajib diisi.',
			'valid_email'	=> 'Email tidak valid'
		],
		'password' => [
			'required' 	=> 'Password wajib diisi.'
		]
	];

	public $register = [
		'firstname' => 'required',
		'lastname' => 'required',
		'email' => 'required|is_unique[user.email]|valid_email',
		'password' => 'required',
		'password_confirm' => 'required|matches[password]'
	];

	public $register_errors = [
		'firstname' => [
			'required' => 'First Name wajib isi soalnya kita pengen tau :v'
		],
		'lastname' => [
			'required' => 'Last Name wajib isi'
		],
		'email' => [
			'required' => 'Kita butuh Email kamu, jangan sombonglah',
			'is_unique' => 'Udah terdaftar tuh emailnya, jadi gak boleh sama',
			'valid_email' => 'Emailnya periksa lagi coba salah tuh'
		],
		'password' => [
			'required' => 'Passwordnya diisilah, ya kali nanti masuk gak pake password(situ suka bercanda dah)'
		],
		'password_confirm' => [
			'required' => 'Confirm Password harus diisilah',
			'matches' => 'Confirm Passwordnya masa gak sama kayak password'
		]
	];

	public $tambah = [
		'username' => 'required',
		'email' => 'required|is_unique[user.email]|valid_email',
		'password' => 'required',
		'password_confirm' => 'required|matches[password]',
		'gambar' => 'max_size[gambar,5120]is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
	];

	public $tambah_errors = [
		'Username' => [
			'required' => 'Username wajib isi'
		],
		'email' => [
			'required' => 'Kita butuh Email kamu, jangan sombonglah',
			'is_unique' => 'Udah terdaftar tuh emailnya, jadi gak boleh sama',
			'valid_email' => 'Emailnya periksa lagi coba salah tuh'
		],
		'password' => [
			'required' => 'Passwordnya diisilah, ya kali nanti masuk gak pake password(situ suka bercanda dah)'
		],
		'password_confirm' => [
			'required' => 'Confirm Password harus diisilah',
			'matches' => 'Confirm Passwordnya masa gak sama kayak password'
		],
		'gambar' => [
			'max_size' => 'file gak boleh lebih dari 5MB',
			'is_image' => 'masukkin apa hayo, bukan masukkin gambar ya',
			'mime_in' => 'masukkin apa hayo, bukan masukkin gambar ya'
		]
	];
}
