<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 11:08:39
         compiled from "/var/www/public/Manni/modules/posmegamenu/megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189600544657c6f2f7b45dc3-07106953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478e1c06a6bc2807e384384f4cf77fbc8af7e091' => 
    array (
      0 => '/var/www/public/Manni/modules/posmegamenu/megamenu.tpl',
      1 => 1472653892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189600544657c6f2f7b45dc3-07106953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockCategTree' => 0,
    'isDhtml' => 0,
    'child' => 0,
    'cms_link' => 0,
    'cms_link1' => 0,
    'cms_cate' => 0,
    'cms_cate1' => 0,
    'manufacture_link' => 0,
    'manufacture_link1' => 0,
    'supply_link' => 0,
    'supply_link1' => 0,
    'custom_link' => 0,
    'custom_link1' => 0,
    'product_link' => 0,
    'product_link1' => 0,
    'all_man_link' => 0,
    'all_sup_link' => 0,
    'megamenu' => 0,
    'effect' => 0,
    'top_offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6f2f7d4c0c6_75855087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6f2f7d4c0c6_75855087')) {function content_57c6f2f7d4c0c6_75855087($_smarty_tpl) {?><!-- Block categories module -->
<?php if ($_smarty_tpl->tpl_vars['blockCategTree']->value!='') {?>
	<div class="pt_custommenu_mobile hidden-sm hidden-md hidden-lg">
		<div class="navbar">
			<div id="navbar-inner" class="navbar-inner navbar-inactive">
				<a class="btn-navbar"><?php echo smartyTranslate(array('s'=>'Category','mod'=>'posmegamenu'),$_smarty_tpl);?>
</a>
				<ul id="pt_custommenu_itemmobile" class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>  mobilemenu nav-collapse collapse">
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

						<?php }?>
					<?php } ?>
					    <?php if (isset($_smarty_tpl->tpl_vars['cms_link']->value)) {?> 
							<?php  $_smarty_tpl->tpl_vars['cms_link1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_link1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_link1']->key => $_smarty_tpl->tpl_vars['cms_link1']->value) {
$_smarty_tpl->tpl_vars['cms_link1']->_loop = true;
?>
								<li>
									<a href="#" title="Contains Subs"><?php echo $_smarty_tpl->tpl_vars['cms_link1']->value['title'];?>
</a>
								</li>
							<?php } ?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['cms_cate']->value)) {?> 
							<?php  $_smarty_tpl->tpl_vars['cms_cate1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_cate1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_cate1']->key => $_smarty_tpl->tpl_vars['cms_cate1']->value) {
$_smarty_tpl->tpl_vars['cms_cate1']->_loop = true;
?>
								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['cms_cate1']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['cms_cate1']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['cms_cate1']->value['title'];?>
</a>
								</li>
							<?php } ?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['manufacture_link']->value)) {?> 
							<?php  $_smarty_tpl->tpl_vars['manufacture_link1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacture_link1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacture_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacture_link1']->key => $_smarty_tpl->tpl_vars['manufacture_link1']->value) {
$_smarty_tpl->tpl_vars['manufacture_link1']->_loop = true;
?>
								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['manufacture_link1']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['manufacture_link1']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['manufacture_link1']->value['title'];?>
</a>
								</li>
							<?php } ?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['supply_link']->value)) {?> 
							<?php  $_smarty_tpl->tpl_vars['supply_link1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supply_link1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supply_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supply_link1']->key => $_smarty_tpl->tpl_vars['supply_link1']->value) {
$_smarty_tpl->tpl_vars['supply_link1']->_loop = true;
?>
								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['supply_link1']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['supply_link1']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['supply_link1']->value['title'];?>
</a>
								</li>
							<?php } ?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['custom_link']->value)) {?> 
							<?php  $_smarty_tpl->tpl_vars['custom_link1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['custom_link1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['custom_link1']->key => $_smarty_tpl->tpl_vars['custom_link1']->value) {
$_smarty_tpl->tpl_vars['custom_link1']->_loop = true;
?>
								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['custom_link1']->value->link;?>
" title="<?php echo $_smarty_tpl->tpl_vars['custom_link1']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['custom_link1']->value['title'];?>
</a>
								</li>
							<?php } ?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['product_link']->value)) {?> 
							<?php  $_smarty_tpl->tpl_vars['product_link1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_link1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_link1']->key => $_smarty_tpl->tpl_vars['product_link1']->value) {
$_smarty_tpl->tpl_vars['product_link1']->_loop = true;
?>
								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['product_link1']->value->link;?>
" title="<?php echo $_smarty_tpl->tpl_vars['product_link1']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['product_link1']->value['title'];?>
</a>
								</li>
							<?php } ?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['all_man_link']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['all_man_link']->value;?>
 <?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['all_sup_link']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['all_sup_link']->value;?>
 <?php }?>
				</ul>
                                <script type="text/javascript">
                                // <![CDATA[
                                        // we hide the tree only if JavaScript is activated
                                        $('div#categories_block_left ul.dhtml').hide();
                                // ]]>
                                </script>
			</div>
		</div>
</div>
<?php }?>
<!-- /Block categories module -->
<div class="nav-container visible-desktop hidden-xs">
    <div id="pt_custommenu" class="pt_custommenu">
        <?php echo $_smarty_tpl->tpl_vars['megamenu']->value;?>

    </div>
	<div class="clearfix"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var CUSTOMMENU_POPUP_EFFECT = <?php echo $_smarty_tpl->tpl_vars['effect']->value;?>
;
var CUSTOMMENU_POPUP_TOP_OFFSET = <?php echo $_smarty_tpl->tpl_vars['top_offset']->value;?>
;
//]]>
</script><?php }} ?>
