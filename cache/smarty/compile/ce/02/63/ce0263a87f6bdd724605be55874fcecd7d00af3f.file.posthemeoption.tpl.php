<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 11:08:35
         compiled from "/var/www/public/Manni/modules/posthemeoption/posthemeoption.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113800294357c6f2f3212c92-35285852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0263a87f6bdd724605be55874fcecd7d00af3f' => 
    array (
      0 => '/var/www/public/Manni/modules/posthemeoption/posthemeoption.tpl',
      1 => 1472653894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113800294357c6f2f3212c92-35285852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titlefont' => 0,
    'linkfont' => 0,
    'fontnametitle' => 0,
    'fontnamelink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6f2f3313f65_59323114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6f2f3313f65_59323114')) {function content_57c6f2f3313f65_59323114($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['titlefont']->value)&&$_smarty_tpl->tpl_vars['titlefont']->value) {?> <?php echo html_entity_decode($_smarty_tpl->tpl_vars['titlefont']->value);?>
 <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['linkfont']->value)&&$_smarty_tpl->tpl_vars['linkfont']->value) {?> <?php echo html_entity_decode($_smarty_tpl->tpl_vars['linkfont']->value);?>
 <?php }?>
<style type="text/css">
	
		<?php if (isset($_smarty_tpl->tpl_vars['titlefont']->value)&&$_smarty_tpl->tpl_vars['titlefont']->value) {?>
			h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnametitle']->value;?>
;
			} 
			.fontcustom1{
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnametitle']->value;?>
 !important;
			}
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['linkfont']->value)&&$_smarty_tpl->tpl_vars['linkfont']->value) {?>
			body {
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnamelink']->value;?>
;
			}
			.fontcustom2{
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnamelink']->value;?>
 !important;
			}
		<?php }?>
	
	
</style><?php }} ?>
