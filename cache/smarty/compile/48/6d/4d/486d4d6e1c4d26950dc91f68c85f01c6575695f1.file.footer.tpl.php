<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 11:08:53
         compiled from "/var/www/public/Manni/themes/pos_karan1/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205982074857c6f3055d1e76-54438350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486d4d6e1c4d26950dc91f68c85f01c6575695f1' => 
    array (
      0 => '/var/www/public/Manni/themes/pos_karan1/footer.tpl',
      1 => 1472653908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205982074857c6f3055d1e76-54438350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6f305606c46_13691532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6f305606c46_13691532')) {function content_57c6f305606c46_13691532($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
				<footer class="footer-container">
					<div class="footer_top_container">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter1"),$_smarty_tpl);?>

					</div>
					<div id="footer" class="footer_center">
						<div class="container_big">
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter2"),$_smarty_tpl);?>

								</div>
								<div class="col-xs-12 col-sm-4 ft_block_center">
									<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
										<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

									<?php }?>
								</div>
								<div class="col-xs-12 col-sm-4">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter3"),$_smarty_tpl);?>

								</div>
							</div>
						</div>
					</div>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter4"),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooterExtra"),$_smarty_tpl);?>

				</footer>
			<!-- #footer -->
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="back-top"><a href= "#" class="back-top-button hidden-xs"></a></div>
	</body>
</html><?php }} ?>
