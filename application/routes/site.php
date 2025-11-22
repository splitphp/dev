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
    $this->setAntiXsrfValidation(false);

    // Home Page Endpoints:
    $this->addEndpoint('GET', '/home', function ($params) {
      $message = $this->getService('example')->welcomeMsg();

      $templateVars = [
        'message' => $message,
        'params' => $params
      ];

      return $this->response
        ->withStatus(200)
        ->withHTML($this->renderTemplate('site/home', $templateVars));
    });
  }
}
