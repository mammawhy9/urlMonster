<?php
    /**
     * Created by PhpStorm.
     * User: Piotrek
     * Date: 2015-08-14
     * Time: 12:31
     */
     // todo: zaimplementowac widoki zalezne od modulu, posprzatac w metodach ladowania
    namespace app\view;


    class DefaultView {

    protected $menu;

    protected $content;

    protected $footer;

    protected $params;


    public function __construct() {

    }

    public function loadTemplate() {
        $this->loadHead();
        $this->loadBody();
    }

    protected function loadHead() {
        $site_title = 'Strona Default';		$TemplateName = \app\lib\config::getModulePath('head',$this->getClassName());
        $nazwa = $TemplateName . '.php';
        $PathToFile = __DIR__ . '/../templates/' . $nazwa;
        if(!file_exists($PathToFile)) {
            $PathToFile = __DIR__ . '/../templates/default_head.php';
        }
        require $PathToFile;
    }

    protected function loadBody() {

        $TemplateName = \app\lib\config::getModulePath('body',$this->getClassName());
        $nazwa = $TemplateName . '.php';
        $PathToFile = __DIR__ . '/../templates/' . $nazwa;
        if(!file_exists($PathToFile)) {
            $PathToFile = __DIR__ . '/../templates/default_body.php';
        }
        require $PathToFile;
        $this->loadHeadline();
        $this->loadMedium();
        $this->loadBottom();
    }

    protected function loadHeadline() {
        $TemplateName = \app\lib\config::getModulePath('headline',$this->getClassName());
        $nazwa = $TemplateName . '.php';
        $PathToFile = __DIR__ . '/../templates/' . $nazwa;
        if(!file_exists($PathToFile)) {
            $PathToFile = __DIR__ . '/../templates/default_headline.php';
        }
        require $PathToFile;
        $this->loadMenu();
    }

    protected function loadMedium() {
        $TemplateName = \app\lib\config::getModulePath('medium',$this->getClassName());
        $nazwa = $TemplateName . '.php';
        $PathToFile = __DIR__ . '/../templates/' . $nazwa;
        if(!file_exists($PathToFile)) {
            $PathToFile = __DIR__ . '/../templates/default_medium.php';
        }
        require $PathToFile;

        $this->loadContent();
    }

    protected function loadBottom() {
        $TemplateName = \app\lib\config::getModulePath('bottom',$this->getClassName());
        $nazwa = $TemplateName . '.php';
        $PathToFile = __DIR__ . '/../templates/' . $nazwa;
        if(!file_exists($PathToFile)) {
            $PathToFile = __DIR__ . '/../templates/default_bottom.php';
        }
        require $PathToFile;

        $this->loadFooter();
    }

    protected function loadContent() {
        $TemplateName = \app\lib\config::getModulePath('content',$this->getClassName());
        $nazwa = $TemplateName . '.php';
        $PathToFile = __DIR__ . '/../templates/' . $nazwa;
        if(!file_exists($PathToFile)) {
            $PathToFile = __DIR__ . '/../templates/default_content.php';
        }
        require $PathToFile;
    }

    protected function loadMenu() {	$TemplateName = \app\lib\config::getModulePath('menu',$this->getClassName());
        $nazwa = $TemplateName . '.php';
        $PathToFile = __DIR__ . '/../templates/' . $nazwa;
        if(!file_exists($PathToFile)) {
            $PathToFile = __DIR__ . '/../templates/default_menu.php';
        }
        require $PathToFile;

    }

    protected function loadFooter() {	$TemplateName = \app\lib\config::getModulePath('footer',$this->getClassName());
        $nazwa = $TemplateName . '.php';
        $PathToFile = __DIR__ . '/../templates/' . $nazwa;
        if(!file_exists($PathToFile)) {
            $PathToFile = __DIR__ . '/../templates/default_footer.php';
        }
        require $PathToFile;
    }

    public function setParams(Array $params) {
        $this->params = $params;
    }

    public function getClassName(){
        $class = explode('\\', get_called_class());
        return array_pop($class);
    }
}
