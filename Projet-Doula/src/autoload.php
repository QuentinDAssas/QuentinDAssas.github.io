
<?php

//appel dynamique des require des class utilisés dans le programme
spl_autoload_register(function($className) {
    
    $className = str_replace("\\", "/", $className);
    
    require_once("src/$className.php");
    
});