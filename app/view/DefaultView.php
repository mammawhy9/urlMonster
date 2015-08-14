<?php
/**
 * Created by PhpStorm.
 * User: Piotrek
 * Date: 2015-08-14
 * Time: 12:31
 */

namespace app\view;


class DefaultView {
    protected $SmartyInstance;

    public function __construct() {
        $this->SmartyInstance = new \Smarty();
    }
}