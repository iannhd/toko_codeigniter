<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'varchar',
                'constraint' => 200,
            ],
            'price' => [
                'int' => 'varchar',
                'constraint' => 11,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        
    }
}
