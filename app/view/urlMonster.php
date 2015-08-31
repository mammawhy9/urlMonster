<?php
/**
 * Created by PhpStorm.
 * User: Piotrek
 * Date: 2015-08-14
 * Time: 12:38
 */

namespace app\view;


class urlMonster extends DefaultView{

    public function LoadTemplate($TemplateName = 'default') {
        require('app\templates\\'.$TemplateName.'.tpl');
    }
}
