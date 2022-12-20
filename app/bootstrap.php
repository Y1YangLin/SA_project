<?php

    // Load Config
    require_once 'config/Config.php';

    // Load Helpers
    require_once 'helpers/url_helper.php';
    require_once 'helpers/session_helper.php';

    // include_once '';

    // Autoload Core Libraries 
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className .'.php';
    });
?>

