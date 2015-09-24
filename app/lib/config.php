<?php

    /*
     * TODO: zaimplementować routing dla stron , modulow i kontrolerow
     */

    namespace app\lib;
    /*
     * Description of config
     * @author Piotrek
     */
    class config {

    /*
     * tablica z sciezkami do modulow
     * @var array
     */ 
    private static $modules;

    /* 
     * tablica z passami do bazy 
     * @var array
     */
    private $baseParams;

    public static function setRoutes () {

    require __DIR__ . '/../../config/modules.php';
    self::$modules = $template;
    }

    public static function getBaseParams() {

    }

        public static function getModulePath ($partName,$moduleName) {
            if(isset(self::$modules[$moduleName][$partName])) {
                return self::$modules[$moduleName][$partName];
            } else {
                return false;
            }
        }

    }
