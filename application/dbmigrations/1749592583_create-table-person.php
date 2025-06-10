<?php

namespace Application\Migrations;

use SplitPHP\DbMigrations\Migration;
use SplitPHP\Database\DbVocab;

class CreateTablePerson extends Migration{
  public function apply(){
    /**
     * Here goes your migration's statements. For example, the following code
     * creates or alters a table called 'Person', and adds or changes this 
     * table's columns: 'id_person', 'id_company' 'name' and 'dt_birth':
     * 
     */

      $this->Table('Company')
       ->id('id_company') // int primary key auto increment
       ->string('name', 100); // varchar(100)
       
      $this->Table('Person')
       ->id('id_person') // int primary key auto increment
       ->int('id_company') // int
       ->Foreign('id_company')->references('id_company')->atTable('Company')->onUpdate(DbVocab::FKACTION_CASCADE)
       ->string('name', 100) // varchar(100)
       ->datetime('dt_birth') // datetime
         ->setDefaultValue(DbVocab::SQL_CURTIMESTAMP()); // default current timestamp
  }
}