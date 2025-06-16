<?php

namespace Test\EventListeners;

use \SplitPHP\EventListener;
use SplitPHP\Utils;

class Test extends EventListener
{
  public function init()
  {
    // $this->addEventListener('log.any', function ($evt) {
    //   Utils::printLn("FROM LOG ANY");
    //   var_dump($evt);
    // });

    // $this->addEventListener('log.error', function ($evt) {
    //   Utils::printLn("FROM LOG ERROR");
    //   var_dump($evt);
    // });

    // $this->addEventListener('curl.before', function ($evt) {
    //   Utils::printLn("FROM CURL BEFORE");
    //   var_dump($evt);
    // });

    // $this->addEventListener('curl.error', function ($evt) {
    //   Utils::printLn("FROM CURL ERROR");
    //   var_dump($evt);
    // });

    // $this->addEventListener('curl.response', function ($evt) {
    //   Utils::printLn("FROM CURL RESPONSE");
    //   var_dump($evt);
    // });
  }
}
