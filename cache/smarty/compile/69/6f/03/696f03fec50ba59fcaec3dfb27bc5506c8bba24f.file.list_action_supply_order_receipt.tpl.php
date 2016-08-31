<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:19
         compiled from "/var/www/public/Manni/admin/themes/default/template/helpers/list/list_action_supply_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180233689457c6eeabd0c084-60045358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '696f03fec50ba59fcaec3dfb27bc5506c8bba24f' => 
    array (
      0 => '/var/www/public/Manni/admin/themes/default/template/helpers/list/list_action_supply_order_receipt.tpl',
      1 => 1472653836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180233689457c6eeabd0c084-60045358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6eeabd47844_41418737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6eeabd47844_41418737')) {function content_57c6eeabd47844_41418737($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-truck"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
