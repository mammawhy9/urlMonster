<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\lib;

/**
 * Description of application
 *
 * @author Piotrek
 */
class application {

    private static $selfInstance;

    public static function generate() {
        if (false == self::$selfInstance) {
            self::$selfInstance = new \app\lib\application();
        }
        return self::$selfInstance;
    }

    public function pisz() {
        echo "kowal";
    }

    public function generateSite() {
        $this->generateController();
        $this->generateModels();
    }

    public function generateController() {
        $controllerParam = \app\lib\router::getPath();
        $controllerName = "app\controller\\".end($controllerParam);
        $controller = new $controllerName;
    }
    
    public function generateModels() {
        
    }

}
