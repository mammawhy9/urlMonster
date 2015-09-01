<?php
// TODO: porządek w kodzie, standardy
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    chdir(dirname(__DIR__));
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

spl_autoload_register('autoload');   //$kon = new app\controller\controller_default();
$application = app\lib\application::generate();
$application->generateSite();
//  echo " <pre>";
//echo var_dump($application);
//   echo "</pre>";
