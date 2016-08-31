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
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6f2f3784a34_48695545',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6f2f3784a34_48695545')) {function content_57c6f2f3784a34_48695545($_smarty_tpl) {?><div class="searchblock"> <a class="icon_top current" href="javascript:void(0)" title="Menu"> <i class="icon2-magnifier"></i> </a><div id="search_block_top" class="toogle_content"><form id="searchbox" method="get" action="//manni.app/en/search" > <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" /> <button type="submit" name="submit_search" class="btn btn-default button-search"> <span>Search</span> </button></form></div></div><?php }} ?>
