<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:11
         compiled from "/var/www/public/Manni/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156394473057c6eea3836a33-06837984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f39e90fd5f51ef8fa39d07b5d9f5befb0dcf4878' => 
    array (
      0 => '/var/www/public/Manni/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1472653835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156394473057c6eea3836a33-06837984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6eea385e832_41020785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6eea385e832_41020785')) {function content_57c6eea385e832_41020785($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>
