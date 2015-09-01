<?php
/**
 * Created by PhpStorm.
 * User: Piotrek
 * Date: 2015-08-14
 * Time: 12:38
 */

//TODO: zrobic porządny routing, przeniesc LoadTemplate do abstraktu
namespace app\view;


class urlMonster extends DefaultView{

    public function LoadTemplate($TemplateName = 'default') {
        $nazwa = $TemplateName . '.php';
        $site_title = 'Strona Default';
        require __DIR__ . '/../templates/' . $nazwa;
    }
}