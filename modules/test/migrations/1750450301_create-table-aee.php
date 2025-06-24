<?php

namespace Test\Migrations;

use SplitPHP\DbMigrations\Migration;
use SplitPHP\Database\DbVocab;

class CreateTableAee extends Migration
{
  public function apply()
  {
    $this->onDatabase('testdb2')
      ->Table('Aee')
      ->id('id') // int primary key auto increment
      ->string('name', 100) // varchar(100)
      ->datetime('dt_birth')
      ->setDefaultValue(DbVocab::SQL_CURTIMESTAMP()); // default current timestamp
  }
}
