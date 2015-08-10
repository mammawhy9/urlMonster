<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controller;

/**
 * Description of default
 *
 * @author Piotrek
 */
class controller_default {
    
    public function __construct() {
    	
    }
    public static function route($path) {
        header("Location: ".$path);
    } 
}