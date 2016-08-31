<?php

if (!defined('_PS_VERSION_'))
    exit;

class Posnewproduct extends Module {

    private $_html = '';
    private $_postErrors = array();

    function __construct() {
        $this->name = 'posnewproduct';
        $this->tab = 'front_office_features';
        $this->version = '1.1';
        $this->author = 'Posthemes';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.5', 'max' => '1.6');
        parent::__construct();

        $this->displayName = $this->l('Pos New products on homepage.');
        $this->description = $this->l('Displays new products in any where of your homepage.');
    }

    function install() {
        $this->_clearCache('posnewproduct.tpl');
        Configuration::updateValue('POSNEWPRODUCT', 30);
        if (!parent::install()
                || !$this->registerHook('blockPosition3')
                || !$this->registerHook('header')
                || !$this->registerHook('addproduct')
                || !$this->registerHook('updateproduct')
                || !$this->registerHook('deleteproduct')
        )
            return false;
        return true;
    }

    public function uninstall() {
        $this->_clearCache('posnewproduct.tpl');
        return parent::uninstall();
    }

    public function hookDisplayHeader($params) {
        $this->hookHeader($params);
    }

    public function hookHeader($params) {
        $this->context->controller->addCSS(($this->_path) . 'posnewproduct.css', 'all');
    }
	
	public function hookDisplayHome() {
            $category = new Category(Context::getContext()->shop->getCategory(), (int) Context::getContext()->language->id);
			$products = Product::getNewProducts((int) Context::getContext()->language->id, 0, 30);
            $this->smarty->assign(array(
                'products' => $products,
                'add_prod_display' => Configuration::get('PS_ATTRIBUTE_CATEGORY_DISPLAY'),
                'homeSize' => Image::getSize(ImageType::getFormatedName('home'))
            ));
        return $this->display(__FILE__, 'posnewproduct.tpl', $this->getCacheId('posnewproduct'));
    }	
	public function hookblockPosition1($params)
	{
		return $this->hookDisplayHome($params);
	}
	public function hookblockPosition2($params)
	{
		return $this->hookDisplayHome($params);
	}
	public function hookblockPosition3($params)
	{
		return $this->hookDisplayHome($params);
	}
	public function hookblockPosition4($params)
	{
		return $this->hookDisplayHome($params);
	}
	public function hookblockPosition5($params)
	{
		return $this->hookDisplayHome($params);
	}

    public function hookAddProduct($params) {
        $this->_clearCache('posnewproduct.tpl');
    }

    public function hookUpdateProduct($params) {
        $this->_clearCache('posnewproduct.tpl');
    }

    public function hookDeleteProduct($params) {
        $this->_clearCache('posnewproduct.tpl');
    }
}
