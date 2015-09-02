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
	
	

    public function __construct() {
	
	}
	
	public function loadTemplate() {
		
		$this->loadHead();
		$this->loadBody();
	}

	protected function loadHead() {
		

		$site_title = 'Strona Default';		$TemplateName = \app\lib\config::getModulePath('head');
        $nazwa = $TemplateName . '.php';
		$PathToFile = __DIR__ . '/../templates/' . $nazwa;
		if(!file_exists($PathToFile)) {
			$PathToFile = __DIR__ . '/../templates/default_head.php';
		}
		require $PathToFile;

	}   

	protected function loadBody() {
		

	$TemplateName = \app\lib\config::getModulePath('body');
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
		
        	$TemplateName = \app\lib\config::getModulePath('headline');
        $nazwa = $TemplateName . '.php';
		$PathToFile = __DIR__ . '/../templates/' . $nazwa;
		if(!file_exists($PathToFile)) {
			$PathToFile = __DIR__ . '/../templates/default_headline.php';
		}
		require $PathToFile;

	
		$this->loadMenu();
	}
	
	protected function loadMedium() {
		$TemplateName = \app\lib\config::getModulePath('medium');
        $nazwa = $TemplateName . '.php';
		$PathToFile = __DIR__ . '/../templates/' . $nazwa;
		if(!file_exists($PathToFile)) {
			$PathToFile = __DIR__ . '/../templates/default_medium.php';
		}
		require $PathToFile;

		
		$this->loadContent();
	}

	protected function loadBottom() {
			$TemplateName = \app\lib\config::getModulePath('bottom');
        $nazwa = $TemplateName . '.php';
		$PathToFile = __DIR__ . '/../templates/' . $nazwa;
		if(!file_exists($PathToFile)) {
			$PathToFile = __DIR__ . '/../templates/default_bottom.php';
		}
		require $PathToFile;

		$this->loadFooter();
	}

	protected function loadContent() {
		$TemplateName = \app\lib\config::getModulePath('content');
        $nazwa = $TemplateName . '.php';
		$PathToFile = __DIR__ . '/../templates/' . $nazwa;
		if(!file_exists($PathToFile)) {
			$PathToFile = __DIR__ . '/../templates/default_content.php';
		}
		require $PathToFile;

		
	}

	protected function loadMenu() {	$TemplateName = \app\lib\config::getModulePath('menu');
        $nazwa = $TemplateName . '.php';
		$PathToFile = __DIR__ . '/../templates/' . $nazwa;
		if(!file_exists($PathToFile)) {
			$PathToFile = __DIR__ . '/../templates/default_menu.php';
		}
		require $PathToFile;

		
	}
	
	protected function loadFooter() {	$TemplateName = \app\lib\config::getModulePath('footer');
        $nazwa = $TemplateName . '.php';
		$PathToFile = __DIR__ . '/../templates/' . $nazwa;
		if(!file_exists($PathToFile)) {
			$PathToFile = __DIR__ . '/../templates/default_footer.php';
		}
		require $PathToFile;

		
	}


}
