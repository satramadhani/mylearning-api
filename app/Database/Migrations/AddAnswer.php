<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAnswer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_answer' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'answer' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'id_question' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
            ],
            'id_grade' => [
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

        $this->forge->addKey('id_answer', true);
        $this->forge->addForeignKey('id_question', 'questions', 'id_question', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_grade', 'grades', 'id_grade', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('answers');
    }

    public function down()
    {
        $this->forge->dropTable('answers');
    }
}