<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    namespace app\lib;

    /**
     * Description of router
     * @author Piotrek
     */
    class router {
        public static function getPath () {
            $zm = $_SERVER['REQUEST_URI'];
            $zm = ltrim($zm, '/');
            $zm = rtrim($zm, '/');
            $condition = strpos($zm, '?');
            if ($condition) {
                $zm = substr($zm, 0, $condition);
            }
            $zm = rtrim($zm, '/');
            $zm = explode('/', $zm);
            return $zm;
        }

        public static function getModel () {
            $zm = $_SERVER['REQUEST_URI'];
            $condition = strpos($zm, '?');
            if ($condition) {
                $zm = substr($zm, $condition);
                return $zm;
            } else {
                return null;
            }
        }

    }
