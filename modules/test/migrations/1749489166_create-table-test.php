<?php

namespace Test\Migrations;

use SplitPHP\DbMigrations\Migration;
use SplitPHP\Database\DbVocab;

class CreateTableTest extends Migration{
  public function apply(){
    /**
     * Here goes your migration's statements. For example, the following code
     * creates or alters a table called 'Person', and adds or changes this 
     * table's columns: 'id_person', 'id_company' 'name' and 'dt_birth':
     * 
     */
      $this->Table('Test')
       ->id('id_test') // int primary key auto increment
       ->int('nr_int') // int
       ->string('ds_str', 100) // varchar(100)
       ->datetime('dt_birth') 
         ->setDefaultValue(DbVocab::SQL_CURTIMESTAMP()); // default current timestamp
  }
}