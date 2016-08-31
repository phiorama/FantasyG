<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 14:50:05
         compiled from "/var/www/public/Manni/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160773838757c6ee9dcd3616-48314746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2b071cc155a9492c28b45d18e0183e7b88da8f5' => 
    array (
      0 => '/var/www/public/Manni/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1472653834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160773838757c6ee9dcd3616-48314746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6ee9dd04417_83068306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6ee9dd04417_83068306')) {function content_57c6ee9dd04417_83068306($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
