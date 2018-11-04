<?php
    session_start();

    include_once 'html/autoloader.php'; 
    require_once 'processing/main.processing.php';
    $html = new Html();

    $html->htmlOpen();
 
        $html->headOpen();

            $html->title('ExpliqueSimplement');
            $html->css('./css/style.css');
            $html->script('./js/script.js');

        $html->headClose();

        $html->bodyOpen();

            $modules = scandir('modules/');
            $url = 'home.php'; //default url

            if (isset($_GET['module'])){
               $get = $_GET['module'];
               if (in_array($get.'.php', $modules)) {
                   $url = $get.'.php';

               }
            }
            
            include_once('./modules/'.$url);


        $html->bodyClose();
    $html->htmlClose(); 
?>