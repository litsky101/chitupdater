<?php
  require_once 'config/config.php';
  require_once 'db/database.php';
  require_once 'helpers/session_helpers.php';
  require_once 'helpers/url_helpers.php';

  spl_autoload_register(function($className){
    require_once 'core/' . $className . '.php';
  });
 ?>
