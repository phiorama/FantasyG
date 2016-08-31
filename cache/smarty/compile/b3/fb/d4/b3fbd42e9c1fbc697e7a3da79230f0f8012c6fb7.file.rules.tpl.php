<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:07
         compiled from "/var/www/public/Manni/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4310646257c6ee9fa55bb2-44733216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3fbd42e9c1fbc697e7a3da79230f0f8012c6fb7' => 
    array (
      0 => '/var/www/public/Manni/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1472653907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4310646257c6ee9fa55bb2-44733216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6ee9fa918e7_30242903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6ee9fa918e7_30242903')) {function content_57c6ee9fa918e7_30242903($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/public/Manni/tools/smarty/plugins/modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
