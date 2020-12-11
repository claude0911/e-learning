<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodi extends Migration
{
	public function up()
	{
		$column = [
			'id_prodi' =>
			[
				'type' => 'TINYINT',
				'constraint' => 1,
				'auto_increment' => TRUE,
				'null' => FALSE
			],
			'nama_prodi' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 30,
				'null' => FALSE
			],
			'kode_prodi' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 2,
				'null' => FALSE
			],
		];
		$this->forge->addField($column)
			->addKey('id_prodi', TRUE)
			->createTable('prodi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('prodi');
	}
}
