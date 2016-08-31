<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:02
         compiled from "/var/www/public/Manni/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153597991257c6ee9a3066f9-10604713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da47db26640bb608485df563de14ddfcff2a7ad2' => 
    array (
      0 => '/var/www/public/Manni/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1472653833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153597991257c6ee9a3066f9-10604713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6ee9a31a380_14196402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6ee9a31a380_14196402')) {function content_57c6ee9a31a380_14196402($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
