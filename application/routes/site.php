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

      // $added = $this->getDao('Test')->insert([
      //   (object) [
      //     'nr_test' => 123,
      //     'name' => 'Teste 123',

      //   ],
      //   (object) [
      //     'nr_test' => 321,
      //     'name' => 'Teste 321',
      //   ],
      // ]);

      $input = $this->getDao('Test')
        ->filter('t')->in([])
        ->find(
          "SELECT * FROM Test WHERE nr_test IN ?t?"
        );

      return $this->response
        ->withStatus(200)
        ->withData($input);
    });
  }
}
