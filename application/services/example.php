<?php

namespace Application\Services;

use \SplitPHP\Service;

class Example extends Service
{
  public function welcomeMsg($name = "")
  {
    return "Welcome {$name} to SPLIT PHP, the lean, low learning curve PHP framework!";
  }
}
