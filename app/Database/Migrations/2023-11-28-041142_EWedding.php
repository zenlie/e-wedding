<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EWedding extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'date' => [
                'type'       => 'DATE',
            ],
            'info' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('e_wedding');
    }

    public function down()
    {
        $this->forge->dropTable('e_wedding');
    }
}
