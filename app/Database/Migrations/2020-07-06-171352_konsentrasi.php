<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Konsentrasi extends Migration
{
	public function up()
	{
		$column = [
			'id_konsentrasi' =>
			[
				'type' => 'TINYINT',
				'constraint' => 2,
				'auto_increment' => TRUE,
				'null' => FALSE
			],
			'nama_konsentrasi' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 30,
				'null' => FALSE
			],
			'kode_konsentrasi' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 5,
				'null' => FALSE
			],
		];
		$this->forge->addField($column)
			->addKey('id_konsentrasi', TRUE)
			->createTable('konsentrasi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('konsentrasi');
	}
}
