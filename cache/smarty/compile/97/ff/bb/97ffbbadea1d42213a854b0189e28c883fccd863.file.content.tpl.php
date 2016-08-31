<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:11
         compiled from "/var/www/public/Manni/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206982530957c6eea3454344-57826542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ffbbadea1d42213a854b0189e28c883fccd863' => 
    array (
      0 => '/var/www/public/Manni/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1472653835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206982530957c6eea3454344-57826542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6eea3464f40_92594183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6eea3464f40_92594183')) {function content_57c6eea3464f40_92594183($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
