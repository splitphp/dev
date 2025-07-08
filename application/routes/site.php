<?php

namespace Application\Routes;

use \SplitPHP\WebService;
use \SplitPHP\Request;

class Site extends WebService
{
  public function init()
  {
    $this->setAntiXsrfValidation(false);

    // Home Page Endpoints:
    $this->addEndpoint(['POST','PUT'], '/home/?test?', function ($input) {

      return $this->response
        ->withStatus(200)
        ->withData($input);
    });
  }
}
