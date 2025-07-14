<?php

namespace Application\Seeds;

use SplitPHP\DbManager\Seed;

class PopulatePerson extends Seed
{
  public function apply()
  {
    /**
     * Here goes your seed's statements. For example, the following code
     * populates a table called 'Person', with 100 rows, passing along the desired values and patterns
     * in each field:
     * 
     */
    $this->SeedTable('Person', batchSize: 100)
      ->onlyRunInEnvs(['dev', 'test', 'development']) // Specify environments where this seed should run
      ->onField('ds_key', true)->setByFunction(fn() => 'prs-' . uniqid())
      ->onField('name')->setRandomStr(1, 100)
      ->onField('species')->setFixedValue('Human');
  }
}
