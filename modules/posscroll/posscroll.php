<?php
class posscroll extends Module {
	public function __construct() {
		$this->name 		= 'posscroll';
		$this->tab 			= 'front_office_features';
		$this->version 		= '1.1';
		$this->author 		= 'posthemes';
		$this->displayName 	= $this->l('Scroll to top');
		$this->description 	= $this->l('Back to Top');
		parent :: __construct();
	}
	public function install() {
		return parent :: install()
            && $this->registerHook('header');
	}
	public function psversion() {
		$version=_PS_VERSION_;
		$exp=$explode=explode(".",$version);
		return $exp[1];
	}
    public function hookHeader($params){
        if ($this->psversion()==5){
            $this->context->controller->addJS(($this->_path).'scrolltop.js','all');
        } else {
            Tools::addJS(($this->_path).'scrolltop.js');
        }
    }	
}