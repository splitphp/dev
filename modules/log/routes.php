<?php

namespace Log\Routes;

use SplitPHP\WebService;

class Log extends WebService
{
  public function init()
  {
    $this->setAntiXsrfValidation(false);
    define('LOG_REQUIRE_AUTHENTICATION', getenv('LOG_REQUIRE_AUTHENTICATION') === 'on');

    // PHPINFO ENDPOINT:
    $this->addEndpoint('GET', '/phpinfo', function () {
      // Authenticate Auth Header:
      if (LOG_REQUIRE_AUTHENTICATION)
        if (!$this->getService('log/log')->checkAuthHeader())
          return $this->response->withStatus(403);

      phpinfo();
    });

    // SERVER LOG ENDPOINT:
    $this->addEndpoint('GET', '/server', function () {
      // Authenticate Auth Header:
      if (LOG_REQUIRE_AUTHENTICATION)
        if (!$this->getService('log/log')->checkAuthHeader())
          return $this->response->withStatus(403);

      return $this->response->withData($this->getService('log/log')->serverErrorLog(), false);
    });

    // LOG RECORDS ENDPOINT:
    $this->addEndpoint('GET', '/?ds_context?', function ($params) {
      // Authenticate Auth Header:
      if (LOG_REQUIRE_AUTHENTICATION)
        if (!$this->getService('log/log')->checkAuthHeader())
          return $this->response->withStatus(403);

      if (empty($params['ds_context']))
        unset($params['ds_context']);

      $records = $this->getService('log/log')->list($params);

      return $this->response->withData($records, false);
    });
  }
}
