<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    chdir(dirname(__DIR__));
    require('app/view/smarty/libs/Smarty.class.php');
    function autoloader_1 ($nazwa_klasy) {
        $plik_klasy = $nazwa_klasy . '.php';

        if (is_file($plik_klasy)) {
            require($plik_klasy);
        }
    }
    spl_autoload_register('autoloader_1');    //$kon = new app\controller\controller_default();

    $application = app\lib\application::generate();
      $application->generateSite();
   echo " <pre>";
echo var_dump($application);
    echo "</pre>";