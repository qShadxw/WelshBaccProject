<?php
require_once __DIR__ . "/private/settings.php";
if (!isset($settings)) die();
?>
<!DOCTYPE html>
<html>
  <head>
      <title><?php echo $settings["pageTitle"] ?></title>
      <link rel="stylesheet" href="css/index_style.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <script src="js/index_script.js"></script>
    </head>
  <body>
      <div class="content">
        <span class="title"><?php echo $content["title"] ?></span>
        <div class="weather-form">
          <input type="text" id="weather-form-city" name="city" placeholder="City"></input>
          <input type="button" id="submit" value="Search"></input>
      </div>
      </div>
  </body>
</html>
