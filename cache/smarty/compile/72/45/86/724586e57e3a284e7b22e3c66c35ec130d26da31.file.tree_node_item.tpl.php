<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:22
         compiled from "/var/www/public/Manni/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30145742857c6eeae6e6241-03164388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '724586e57e3a284e7b22e3c66c35ec130d26da31' => 
    array (
      0 => '/var/www/public/Manni/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1472653836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30145742857c6eeae6e6241-03164388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6eeae6f9387_99310766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6eeae6f9387_99310766')) {function content_57c6eeae6f9387_99310766($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
