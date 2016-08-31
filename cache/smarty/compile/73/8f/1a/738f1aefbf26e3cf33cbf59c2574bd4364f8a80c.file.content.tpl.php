<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:49:57
         compiled from "/var/www/public/Manni/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172507692757c6ee95cab4a0-11006635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '738f1aefbf26e3cf33cbf59c2574bd4364f8a80c' => 
    array (
      0 => '/var/www/public/Manni/admin/themes/default/template/content.tpl',
      1 => 1472653831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172507692757c6ee95cab4a0-11006635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6ee95d65df1_10249137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6ee95d65df1_10249137')) {function content_57c6ee95d65df1_10249137($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
