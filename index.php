<?php
require_once __DIR__ . "/private/settings.php";
if (!isset($settings)) die();
?>
<!DOCTYPE html>
<html>
  <head>
      <title><?php echo $settings["pageTitle"] ?></title>
      <link rel="stylesheet" href="css/index_style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  </head>
  <body>
      <div class="content">
        <span class="title"><?php echo $content["title"] ?></span>
      </div>
  </body>
</html>
