<?php

    
    require_once 'config/Config.php';

    
    require_once 'helpers/url_helper.php';
    require_once 'helpers/session_helper.php';

    // include_once '';
    
    spl_autoload_register(function($className){
        // echo 'className : ' . $className;
        
        require_once 'libraries/' . $className .'.php';
    });

    // exit;
?>

