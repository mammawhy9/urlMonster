<?php
    /**
     * Created by PhpStorm.
     * User: Piotrek
     * Date: 2015-08-14
     * Time: 10:50
     */

    namespace app\model;
    

    class ModelDefault {
        protected $params;
        
        public function getParams(){
          if(isset($this->params)&&(!empty($this->params))) {
              return $this->params;
          } else return array();
        }

    }