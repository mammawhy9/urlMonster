<?php

    namespace app\controller;

    /**
     * Description of default
     * @author Piotrek
     */
    class controller_default {

	    public $config;

        public function __construct () {
			$this->config = new \app\lib\config();
        }

        public static function route ($path) {
            header("Location: " . $path);
        }
        
    }
