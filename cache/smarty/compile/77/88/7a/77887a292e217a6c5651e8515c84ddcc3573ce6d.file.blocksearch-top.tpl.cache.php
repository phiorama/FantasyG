<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 11:08:35
         compiled from "/var/www/public/Manni/themes/pos_karan1/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185703202057c6f2f36a8f79-70205963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77887a292e217a6c5651e8515c84ddcc3573ce6d' => 
    array (
      0 => '/var/www/public/Manni/themes/pos_karan1/modules/blocksearch/blocksearch-top.tpl',
      1 => 1472653912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185703202057c6f2f36a8f79-70205963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6f2f3708ed0_57380209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6f2f3708ed0_57380209')) {function content_57c6f2f3708ed0_57380209($_smarty_tpl) {?><!-- Block search module TOP -->
<div class="searchblock">
	<a class="icon_top current" href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Menu'),$_smarty_tpl);?>
">
		<i class="icon2-magnifier"></i>
	</a>
	<div id="search_block_top" class="toogle_content">
		<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<button type="submit" name="submit_search" class="btn btn-default button-search">
				<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
			</button>
		</form>
	</div>
</div>
<!-- /Block search module TOP --><?php }} ?>
