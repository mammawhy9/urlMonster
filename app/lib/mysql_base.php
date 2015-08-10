<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\lib;

/**
 * Description of mysql_base
 *
 * @author Piotrek
 */
class mysql_base {
    private $db_handler;
    public function __construct() {
        require 'config/base.php';
        $this->db_handler = new \PDO('mysql:host='.$mysql_hostname.';dbname='.$mysql_base_name, $db_user, $db_password);
    }
}
