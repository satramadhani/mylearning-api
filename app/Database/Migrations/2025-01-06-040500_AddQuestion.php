<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddQuestion extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_question' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'question_code' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'question' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'option_a' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'option_b' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'option_c' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'option_d' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'key_answer' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'weight' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
            ],
            'id_course' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
            ]
        ]);

        $this->forge->addKey('id_question', true);
        $this->forge->addForeignKey('id_course', 'courses', 'id_course', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('questions');
    }

    public function down()
    {
        $this->forge->dropTable('questions');
    }
}