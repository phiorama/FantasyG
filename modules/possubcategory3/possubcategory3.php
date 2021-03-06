<?php
class possubcategory3 extends Module {
	private $spacer_size = '5';	
	private $_postErrors  = array();
	private $_html= null;
	public $cate_imgname;
	public function __construct() {
		$this->name 		= 'possubcategory3';
		$this->tab 			= 'front_office_features';
		$this->version 		= '1.5';
		$this->author 		= 'posthemes';
		$this->displayName 	= $this->l('Category Sub Slider 3');
		$this->description 	= $this->l('Category Sub Slider 3');
		parent :: __construct();
	}
	public function install() {
	Configuration::updateValue($this->name . '_p_limit', 3);
	$arrayDefault = array('CAT3','CAT4','CAT5');
	$cateDefault = implode(',',$arrayDefault);
	Configuration::updateGlobalValue($this->name . '_list_cate',$cateDefault);
		return parent :: install()
			&& $this->registerHook('header')
			&& $this->registerHook('blockPosition1');
	}
      public function uninstall() {
		Configuration::deleteByName($this->name . '_list_cate');
        $this->_clearCache('possubcategory3.tpl');
        return parent::uninstall();
    }
	public function psversion() {
		$version=_PS_VERSION_;
		$exp=$explode=explode(".",$version);
		return $exp[1];
	}
    public function hookHeader($params)
	{
		$this->context->controller->addCSS(($this->_path).'possubcategory3.css', 'all');
	}
	public function hookblockPosition1($params) {
	       $nb = Configuration::get($this->name . '_p_limit');
		    $arrayCategory = array();
			$category_id_parent = Configuration::get($this->name . '_list_cate');
			if(!$category_id_parent)  return ; 
			$id_lang =(int) Context::getContext()->language->id;
			$id_shop = (int) Context::getContext()->shop->id;
			$categoryParent = new Category((int) $category_id_parent, (int) $id_lang, (int) $id_shop);
			$category_name = $categoryParent->name;
			$arrayProductCate = array();
			$cateArray = null; 
			$cateArray = 	Category::getChildren((int)$category_id_parent, (int)$id_lang, true, (int)$id_shop);
				$cateArray1 = explode(',', $category_id_parent); 
				$arrayProductCate = array();
				foreach($cateArray1 as $id_category) {
					$id_category = str_replace('CAT','',$id_category);
					$category = new Category((int) $id_category, (int) $id_lang, (int) $id_shop);
					$categoryProducts = $category->getProducts($this->context->language->id, 0, ($nb ? $nb : 20));
					if($categoryProducts) {
						$arrayProductCate[] = array('id' => $id_category, 'name'=> $category->name, 'product' => $categoryProducts);
					}
				}
				$this->context->smarty->assign('category_name',$category->name); 
				$this->smarty->assign(array(
					'category' => $categoryParent,
					'productCates' => $arrayProductCate,
					'add_prod_display' => Configuration::get('PS_ATTRIBUTE_CATEGORY_DISPLAY'),
				));
		return $this->display(__FILE__, 'possubcategory3.tpl');
	}
	  public function getContent() { 
        $output = '<h2>' . $this->displayName . '</h2>';
        if (Tools::isSubmit('submitPosTabCate')) {
            if (!sizeof($this->_postErrors))
                $this->_postProcess();
            else {
                foreach ($this->_postErrors AS $err) {
                    $this->_html .= '<div class="alert error">' . $err . '</div>';
                }
            }
        }
        return $output . $this->_displayForm();
    }
    public function getSelectOptionsHtml($options = NULL, $name = NULL, $selected = NULL) {
        $html = "";
        $html .='<select name =' . $name . ' style="width:130px">';
        if (count($options) > 0) {
            foreach ($options as $key => $val) {
                if (trim($key) == trim($selected)) {
                    $html .='<option value=' . $key . ' selected="selected">' . $val . '</option>';
                } else {
                    $html .='<option value=' . $key . '>' . $val . '</option>';
                }
            }
        }
        $html .= '</select>';
        return $html;
    }
    private function _postProcess() {
        Configuration::updateValue($this->name . '_list_cate', Tools::getValue('list_cate'));
        Configuration::updateValue($this->name . '_p_limit', Tools::getValue('p_limit'));
		$id_shop = (int) Context::getContext()->shop->id;
        $this->_html .= '<div class="conf confirm">' . $this->l('Settings updated') . '</div>';
    }
	private function getCategoryOption($id_category = 1, $id_lang = false, $id_shop = false, $recursive = true) {
		$cateCurrent = Configuration::get($this->name . '_list_cate');		
		$id_lang = $id_lang ? (int)$id_lang : (int)Context::getContext()->language->id;
		$category = new Category((int)$id_category, (int)$id_lang, (int)$id_shop);
		if (is_null($category->id))
			return;
		if ($recursive)
		{
			$children = Category::getChildren((int)$id_category, (int)$id_lang, true, (int)$id_shop);
			$spacer = str_repeat('&nbsp;', $this->spacer_size * (int)$category->level_depth);
		}
		if($category->level_depth>3) return ;
		$shop = (object) Shop::getShop((int)$category->getShopID());
		        if ( (int)$category->id == (int)$cateCurrent) {
					$this->_html .= '<option value="'.(int)$category->id.'" selected ="selected" >'.(isset($spacer) ? $spacer : '').$category->name.' ('.$shop->name.')</option>';
				} else {
					$this->_html .= '<option value="'.(int)$category->id.'">'.(isset($spacer) ? $spacer : '').$category->name.' ('.$shop->name.')</option>';
				}
		if (isset($children) && count($children))
			foreach ($children as $child)
				$this->getCategoryOption((int)$child['id_category'], (int)$id_lang, (int)$child['id_shop']);
    }
	private function _displayForm(){ 
	
			$id_shop = (int) Context::getContext()->shop->id;
         $this->_html .= '
		<form action="'.$_SERVER['REQUEST_URI'].'" method="post" enctype="multipart/form-data">';
			$this->_html .= '<label>' . $this->l('Show Link/Label Category: ') . '</label>';
			$this->_html .= '<div class="margin-form">';
			$this->_html .= '<select name ="list_cate">';
			// BEGIN Categories
			$id_lang = (int) Context::getContext()->language->id;
			$this->getCategoryOption(1, (int) $id_lang, (int) Shop::getContextShopID());
			$this->_html .= '</select>
			</div>';
			$this->_html .='
			 <label>'.$this->l('Products Limit: ').'</label>
			<div class="margin-form">
					<input type = "text"  name="p_limit" value ='.(Tools::getValue('p_limit')?Tools::getValue('p_limit'): Configuration::get($this->name.'_p_limit')).' ></input>
			</div>
			<input type="submit" name="submitPosTabCate" value="'.$this->l('Update').'" class="button" />
			 </fieldset>
		</form>';
		return $this->_html;
	}
}