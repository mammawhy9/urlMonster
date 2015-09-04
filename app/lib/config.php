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
		private static $baseParams;
		
		public function __construct() {
			self::setRoutes();
			self::setBaseParams();
		}

		public static function setRoutes () {
			require __DIR__ . '/../../config/modules.php';
			self::$modules = $template;

		}
		
		
		public static function setBaseParams() {
			require __DIR__ . '/../../config/base.php';
			self::$baseParams = $baseParams;

		}

        public static function getModulePath ($partName,$moduleName) {
			if(isset(self::$modules[$moduleName][$partName])) {
				return self::$modules[$moduleName][$partName];
			} else {
				return false;
			}
		}

    }
