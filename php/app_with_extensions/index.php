<!DOCTYPE html>
<html>
  <head>
    <title>Powered By Paketo Buildpacks</title>
  </head>
  <body>
    <img style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="https://paketo.io/images/paketo-logo-full-color.png"></img>
<?php
    foreach (get_loaded_extensions() as $ext) {
        print($ext . "\n");
    }
?>
  </body>
</html>