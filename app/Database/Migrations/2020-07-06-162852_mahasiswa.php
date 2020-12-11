<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
	public function up()
	{
		$column = [
			'id_mahasiswa' => [
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
				'null' => FALSE
			],
			'nim' => [
				'type' => 'INT',
				'constraint' => 8,
				'null' => FALSE
			],
			'nama_mahasiswa' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 8,
				'null' => FALSE
			],
			'goldar' => [
				'type' => 'VARCHAR',
				'constraint' => 2,
				'null' => FALSE
			],
			'alamat' => [
				'type' => 'TEXT',
				'null' => FALSE
			],
			'telp' => [
				'type' => 'INT',
				'constraint' => 18,
				'null' => FALSE
			],
			'gambar' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE
			],
			'id_prodi' =>
			[
				'type' => 'TINYINT',
				'constraint' => 1,
				'null' => FALSE
			],
			'id_konsentrasi' =>
			[
				'type' => 'TINYINT',
				'constraint' => 2,
				'null' => FALSE
			],
			'id_konsentrasi' =>
			[
				'type' => 'TINYINT',
				'constraint' => 2,
				'null' => FALSE
			],
			'id_jenjang' =>
			[
				'type' => 'TINYINT',
				'constraint' => 1,
				'null' => FALSE
			],
		];
		$this->forge->addField($column)
			->addKey('id_mahasiswa', TRUE)
			->addKey(['id_prodi', 'id_konsentrasi', 'id_jenjang'])
			->createTable('mahasiswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('mahasiswa');
	}
}
