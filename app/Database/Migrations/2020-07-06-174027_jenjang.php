<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jenjang extends Migration
{
	public function up()
	{
		$column = [
			'id_jenjang' =>
			[
				'type' => 'TINYINT',
				'constraint' => 1,
				'auto_increment' => TRUE,
				'null' => FALSE
			],
			'nama_jenjang' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 10,
				'null' => FALSE
			],
			'kode_jenjang' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 2,
				'null' => FALSE
			],
		];
		$this->forge->addField($column)
			->addKey('id_jenjang', TRUE)
			->createTable('jenjang');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('jenjang');
	}
}
