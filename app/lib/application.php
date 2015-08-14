<?php
    namespace app\lib;

    /**
     *  class for application
     */
    class application {

        /**
         * application instance
         * @var app\lib\application
         */
        private static $selfInstance;

        /**
         *  controller of application
         * @var mixed
         */
        private $controller;

        /**
         * model of application
         * @var mixed
         */
        private $model;

        /**
         * @var mixed
         */
        private $view;

        /**
         * @return app\lib\application
         */
        public static function generate () {
            if (false == self::$selfInstance) {
                self::$selfInstance = new \app\lib\application();
            }
            return self::$selfInstance;
        }

        /**
         *  generates site
         */
        public function generateSite () {
            $this->generateController();
            $this->generateModels();
            $this->generateView();
        }

        /**generates
         *  generates controller from URL
         */
        public function generateController () {
            $controllerParam = \app\lib\router::getPath();
            $controllerName = "app\controller\\" . end($controllerParam);
            $this->controller = new $controllerName;
        }

        /**
         *  generate model from URL
         */
        public function generateModels () {
            $modelParam = \app\lib\router::getModel();
            $this->model = $modelParam;
        }

        public function generateView () {
            print_r($this->controller->GetControllerVariables());

        }

    }
