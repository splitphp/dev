<?php

namespace Application\Migrations;

use SplitPHP\DbMigrations\Migration;
use SplitPHP\Database\DbVocab;

class RemoveProcedureGenerateDateseries extends Migration
{
  public function apply()
  {
    $this->Procedure('generate_dateseries')->drop();
  }
}
