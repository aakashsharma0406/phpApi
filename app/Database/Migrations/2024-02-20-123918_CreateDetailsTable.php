<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type"=>"INT",
                "constraint"=>7,
                "auto_increment"=>true,
                "unsigned"=>true
            ],
            "name" => [
                "type"=>"VARCHAR",
                "constraint"=>120,
                
                "null"=>false
            ],
            "email"=> [
                "type"=>"VARCHAR",
                "constraint"=>120,
                
                "null"=>false
            ]
            ,
            "password"=> [
                "type"=>"VARCHAR",
                "constraint"=>120,
                "null"=>false
            ],
        ]);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("details");

    }

    public function down()
    {
        $this->forge->dropTable("details");
    }
}
