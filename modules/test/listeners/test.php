<?php

namespace Test\EventListeners;

use \SplitPHP\EventListener;

class Test extends EventListener
{
  public function init()
  {
    $this->addEventListener('onEventTest', function ($evt) {
      $list = $this->getDao('IAM_USER')
        ->find('SELECT id_iam_user, ds_first_name FROM `IAM_USER`');

      header('Content-Type: application/json;');
      echo json_encode($list);
      die;
    });
  }
}
