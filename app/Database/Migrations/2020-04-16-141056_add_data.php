<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddData extends Migration
{
	public function up()
	{
		$field = [
			'id' => [
				'type' => 'INT',
				'constraint' => 6,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'mobile' => [
				'type' => 'VARCHAR',
				'constraint' => 20
			],
			'dob' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'pincode' => [
				'type' => 'varchar',
				'constraint' => 10
			]
		];
		$this->forge->addField($field);
		$this->forge->addKey('id', true);
		$this->forge->createTable('data');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('data');
	}
}
