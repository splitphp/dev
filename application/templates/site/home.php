<html>

<head>
  <title><?php echo APPLICATION_NAME; ?></title>
  <link rel="icon" href="https://splitphp-media-archive.s3.us-east-1.amazonaws.com/SPLIT_PHP-logo-favicon.png">
  <style>
    body {
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
    }
  </style>
</head>

<body>
  <img src="https://splitphp-media-archive.s3.us-east-1.amazonaws.com/SPLIT_PHP-logo-full.png">

  <h4><?php echo $message; ?></h4>

  <p>This is an example page, just to show how this works. Welcome message above comes from a service and is generated in run time.</p>

  <p>If you pass any parameter on the query string, it will appear here:</p>
  <p>
  <pre><?php print_r($params); ?></pre>
  </p>

  <p>For further information, please refer to the <a href="http://splitphp.org/docs" target="_blank">SPLIT PHP Official Docs</a> or its <a href="https://github.com/splitphp/starter" target="_blank">Github</a>.</p>

  <p><b>Have fun! ;)</b></p>
</body>

</html>