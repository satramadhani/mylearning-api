<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddGrade extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_grade' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'grade' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
            ],
            'id_course' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id_grade', true);
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_course', 'courses', 'id_course', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('grades');
    }

    public function down()
    {
        $this->forge->dropTable('grades');
    }
}