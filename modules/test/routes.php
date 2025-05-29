<?php

namespace Test\Routes;

use \SplitPHP\WebService;

class Routes extends WebService
{
  public function init()
  {
    $this->setAntiXsrfValidation(false);

    // Home Page Endpoints:
    $this->addEndpoint('GET', '/home', function ($params) {
      $message = "Aeeee testeeee!!!";

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
