<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:03
         compiled from "/var/www/public/Manni/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78390165157c6ee9bd88017-59352340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c81d3378bbf43d25a1bca1b5f66cb5a2cfc0c31b' => 
    array (
      0 => '/var/www/public/Manni/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1472653834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78390165157c6ee9bd88017-59352340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6ee9bdb70f4_09100357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6ee9bdb70f4_09100357')) {function content_57c6ee9bdb70f4_09100357($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
