<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:19
         compiled from "/var/www/public/Manni/admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4971994657c6eeab58f595-21868612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa4f23ff6b21854205bd95cd6e809ddc68eb9c48' => 
    array (
      0 => '/var/www/public/Manni/admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1472653836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4971994657c6eeab58f595-21868612',
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
  'unifunc' => 'content_57c6eeab5ac929_71958720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6eeab5ac929_71958720')) {function content_57c6eeab5ac929_71958720($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
