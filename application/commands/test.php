<?php

namespace applicationcommands\application\commands;

use SplitPHP\Cli;
use SplitPHP\Utils;

class Test extends Cli
{
  public function init()
  {
    /*
     * Here you can define the command string taht the user must type to execute the associated
     * handler function. The $args parameter is an associative or numeric array containing
     * any argument passed in the command line.
     * For more info, refer to SPLIT PHP docs at www.splitphp.org/docs. 
     */
    $this->addCommand('', function ($args) {
      $this->getService('example')->testProcedure();
    });
  }
}
