<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dosen extends Migration
{
	public function up()
	{
		$column = [
			'id_dosen' => [
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
				'null' => FALSE
			],
			'nip' => [
				'type' => 'INT',
				'constraint' => 18,
				'null' => FALSE
			],
			'nama_dosen' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE
			],
			'alamat' =>
			[
				'type' => 'TEXT',
				'null' => FALSE
			],
			'telp' =>
			[
				'type' => 'INT',
				'constraint' => 150,
				'null' => FALSE
			],
			'goldar' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 2,
				'null' => FALSE
			],
			'gambar' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE
			],
		];
		$this->forge->addField($column)
			->addKey('id_dosen', TRUE)
			->createTable('dosen');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('dosen');
	}
}
