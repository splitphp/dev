<?php

namespace Application\Routes;

use SplitPHP\WebService;
use SplitPHP\Exceptions;

class Site extends WebService
{
  public function init()
  {
    $this->setAntiXsrfValidation(false);

    // Home Page Endpoints:
    $this->addEndpoint(['GET', 'POST', 'PUT'], '/home', function ($input) {
      throw new Exceptions\BadRequest("This is a test endpoint for POST and PUT requests.");

      return $this->response
        ->withStatus(200)
        ->withData($input);
    });
  }
}
