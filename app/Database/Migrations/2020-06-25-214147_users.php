<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'			=> [
				'type'           	=> 'BIGINT',
				'constraint'     	=> 20,
				'unsigned'       	=> TRUE,
				'auto_increment' 	=> TRUE
			],
			'username'       		=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'email'       			=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'password'       		=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '255',
			],
			'level'	=> [
				'type' => 'INT',
				'constraint' => '2',
				'null' => FALSE
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => FALSE
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => FALSE
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
