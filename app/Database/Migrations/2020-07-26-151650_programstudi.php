<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Programstudi extends Migration
{
	public function up()
	{
		$data = [
			'id' =>
			[
				'type' => 'TINYINT',
				'constraint' => 1,
				'auto_increment' => TRUE,
				'null' => FALSE
			],
			'id_prodi' =>
			[
				'type' => 'TINYINT',
				'constraint' => 1,
				'null' => FALSE
			],
			'id_jenjang' =>
			[
				'type' => 'TINYINT',
				'constraint' => 1,
				'null' => FALSE
			],
			'id_dosen' =>
			[
				'type' => 'TINYINT',
				'constraint' => 1,
				'null' => FALSE
			],
		];
		$this->forge->addField($data)
			->addKey('id', TRUE)
			->createTable('programstudi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('programstudi');
	}
}
