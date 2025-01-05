<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMaterial extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_material' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'material_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'file_url' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_course' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
            ]
        ]);

        $this->forge->addKey('id_material', true);
        $this->forge->addForeignKey('id_course', 'courses', 'id_course', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('materials');
    }

    public function down()
    {
        $this->forge->dropTable('materials');
    }
}