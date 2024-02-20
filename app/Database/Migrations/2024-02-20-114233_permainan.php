<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Permainan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_permainan' => [
				'type' => 'INT',
				'constraint' => 10,
				'unsigned' => true,
				'auto_increment' => true
			],
			'permainan' => [
				'type' => 'VARCHAR',
        'constraint' => 255,
        'null' => true
			]
		]);

		$this->forge->addKey('id_permainan', true);
		$this->forge->createTable('permainan', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('permainan');
	}
}
