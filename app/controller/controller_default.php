<?php

    namespace app\controller;

    /**
     * Description of default
     * @author Piotrek
     */
    class controller_default {

        /**
         * @var array
         */
        private $SelfVariables;

        public function __construct () {
            $this->SelfVariables = array('nic' => 'kowal');
        }

        public static function route ($path) {
            header("Location: " . $path);
        }

        public function GetControllerVariables () {
            return $this->SelfVariables;
        }
    }