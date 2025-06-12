<?php

namespace Application\Migrations;

use SplitPHP\DbMigrations\Migration;
use SplitPHP\Database\DbVocab;

class TestMultipleChangeAndDropOperations extends Migration{
  public function apply(){
     $this->Table('Test')
      ->string('ds_company')->drop()
      ->string('ds_str', 255)
      ->int('id_person')
      ->Foreign('id_person')->references('id_person')->atTable('Person')
      ->onUpdate(DbVocab::FKACTION_CASCADE)
      ->onDelete(DbVocab::FKACTION_CASCADE)
      ->string('name', 255); 
  }
}