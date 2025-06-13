<?php

namespace application\services;

use Exception;
use \SplitPHP\Service;
use \SplitPHP\Helpers;

class Example extends Service
{
  public function welcomeMsg($name = "")
  {
    return "Welcome {$name} to SPLIT PHP, the lean, low learning curve PHP framework!";
  }

  public function testProcedure()
  {
    $result = $this->getDao('Company')
      ->generate_dateseries(
        '2018-01-01',
        '2018-01-10'
      )
      ->find("SELECT * FROM dateseries");

    print_r($result);
  }

  public function test(){
    Helpers::cURL()->get('http://localhost:8000/vi/testeee');
  }
}
