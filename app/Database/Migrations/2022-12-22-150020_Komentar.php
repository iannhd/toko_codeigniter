<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => true
            ],
            'id_barang'=>[
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => TRUE,
            ],
            'id_user'=>[
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => TRUE,
            ],
            'komentar' => [
                'type' => 'text',
            ],
            'created_by' => [
                    'type' => 'INT',
                    'constraint' => 11
            ],
            'created_date' => [
                    'type' => 'DATETIME'
            ],
            'updated_by' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'null' => true
            ],
            'updated_date' =>[
                    'type' => 'DATETIME',
                    'null' => true
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('id_user', 'user', 'id');
        $this->forge->addForeignKey('id_barang', 'barang', 'id');
        $this->forge->createTable('komentar');
    }

    public function down()
    {
        $this->forge->dropTable('komentar');
    }
}
