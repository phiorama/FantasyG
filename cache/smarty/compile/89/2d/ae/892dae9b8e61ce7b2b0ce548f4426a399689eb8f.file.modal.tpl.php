<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:21
         compiled from "/var/www/public/Manni/admin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67036280657c6eead2f5f34-32951683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '892dae9b8e61ce7b2b0ce548f4426a399689eb8f' => 
    array (
      0 => '/var/www/public/Manni/admin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1472653836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67036280657c6eead2f5f34-32951683',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6eead30baf3_69672703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6eead30baf3_69672703')) {function content_57c6eead30baf3_69672703($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
