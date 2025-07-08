<?php

namespace Application\Migrations;

use SplitPHP\DbManager\Migration;
use SplitPHP\Database\DbVocab;

class CreateTablePerson extends Migration
{
  public function apply()
  {
    /**
     * Here goes your migration's statements. For example, the following code
     * creates or alters a table called 'Person', and adds or changes this 
     * table's columns: 'id_person', 'id_company' 'name' and 'dt_birth':
     * 
     */
    $this->Table('Person')
      ->id('id_person')
      ->string('ds_key', 17)
      ->string('name', 100)
      ->string('species', 100);
  }
}
