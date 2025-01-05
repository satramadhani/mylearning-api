<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCourse extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_course' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'course_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);

        $this->forge->addKey('id_course', true);
        $this->forge->createTable('courses');
    }

    public function down()
    {
        $this->forge->dropTable('courses');
    }
}