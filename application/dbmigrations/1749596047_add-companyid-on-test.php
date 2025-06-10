<?php

namespace Application\Migrations;

use SplitPHP\DbMigrations\Migration;
use SplitPHP\Database\DbVocab;

class AddCompanyidOnTest extends Migration
{
  public function apply()
  {
    /**
     * Here goes your migration's statements. For example, the following code
     * creates or alters a table called 'Person', and adds or changes this 
     * table's columns: 'id_person', 'id_company' 'name' and 'dt_birth':
     * 
     */
    $this->Table('Test')
      ->int('id_company') // int
      ->Foreign('id_company')
      ->references('id_company')
      ->atTable('Company')
      ->onUpdate(DbVocab::FKACTION_CASCADE);
  }
}
