<?php

    /*
     * TODO: ogarnąć i stworyć dobry interfejs do mysql
     */

    namespace app\lib;

    /**
     * Description of mysql_base
     * @author Piotrek
     */
    class mysql_base {
        private $db_handler;

        public function __construct () {
            require 'config/base.php';
            $this->db_handler = new \PDO('mysql:host=' . $mysql_hostname . ';dbname=' . $mysql_base_name, $db_user, $db_password);
        }
    }
