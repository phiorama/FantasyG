<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 11:08:40
         compiled from "/var/www/public/Manni/modules/posslideshow/slideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12798153457c6f2f8717304-56259157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c473f64617ffcfd9d9ed5f6daafdf3308df99491' => 
    array (
      0 => '/var/www/public/Manni/modules/posslideshow/slideshow.tpl',
      1 => 1472653892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12798153457c6f2f8717304-56259157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6f2f88583b9_75181426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6f2f88583b9_75181426')) {function content_57c6f2f88583b9_75181426($_smarty_tpl) {?><div class="slideshow_container">
<div class="pos-slideshow">
	<div class="flexslider ma-nivoslider">
        <div class="pos-loading"></div>
            <div id="pos-slideshow-home" class="slides">
                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
					
                    <img style ="display:none" src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
"  data-thumb="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
"  alt="" title="#htmlcaption<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_pos_slideshow'];?>
"  />
			   <?php } ?>
            </div>
			<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
				<div id="htmlcaption<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_pos_slideshow'];?>
" class="pos-slideshow-caption nivo-html-caption nivo-caption">
						<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_caption']!=0) {?>
							<div class="pos-slideshow-info pos-slideshow-info<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_pos_slideshow'];?>
">
								<div class="container">
								<div class="pos_description">
										<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

								</div>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['slide']->value['link']) {?>
							<div class="pos-slideshow-readmore">
								<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
" title="<?php echo smartyTranslate(array('s'=>('Shop now'),'mod'=>'posslideshow'),$_smarty_tpl);?>
" class="titleFont"><?php echo smartyTranslate(array('s'=>('Shop now'),'mod'=>'posslideshow'),$_smarty_tpl);?>
</a>	
							</div>
						<?php }?>
				</div>
			<?php } ?>
        </div>
    </div>
    </div>
 <script type="text/javascript">
    $(window).load(function() {
        $('#pos-slideshow-home').nivoSlider({
			effect: '<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['animation_type']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['animation_type'];?>
<?php } else { ?>random<?php }?>',
			slices: 15,
			boxCols: 8,
			boxRows: 4,
			animSpeed: '<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['animation_speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['animation_speed'];?>
<?php } else { ?>600<?php }?>',
			pauseTime: '<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['pause_time']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['pause_time'];?>
<?php } else { ?>5000<?php }?>',
			startSlide: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['start_slide']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['start_slide'];?>
<?php } else { ?>0<?php }?>,
			directionNav: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_arrow']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_arrow'];?>
<?php } else { ?>false<?php }?>,
			controlNav: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_navigation']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_navigation'];?>
<?php } else { ?>false<?php }?>,
			controlNavThumbs: false,
			pauseOnHover: false,
			manualAdvance: false,
			prevText: '<i class="icon-long-arrow-left"></i>',
			nextText: '<i class="icon-long-arrow-right"></i>',
			afterLoad: function(){
				$('.pos-loading').css("display","none");
			},
 		});
    });
</script>
<?php }} ?>
