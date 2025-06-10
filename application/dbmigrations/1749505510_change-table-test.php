<?php

namespace Application\Migrations;

use SplitPHP\DbMigrations\Migration;
use SplitPHP\Database\DbVocab;

class ChangeTableTest extends Migration
{
  public function apply()
  {
    $this->Table('Test')
      ->string('ds_company')
      ->setDefaultValue('abobora');
  }
}
