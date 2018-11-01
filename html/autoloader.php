<?php

/**
 * @param autoloader
 */
spl_autoload_register('app_autoload');

function app_autoload($class){
    require "$class.php";
}