<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:06
         compiled from "/var/www/public/Manni/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98201657857c6ee9eccc675-95586398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f38db4ee221532da0e60db390d362ad1575f31' => 
    array (
      0 => '/var/www/public/Manni/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1472653907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98201657857c6ee9eccc675-95586398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6ee9ece4503_59834197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6ee9ece4503_59834197')) {function content_57c6ee9ece4503_59834197($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
