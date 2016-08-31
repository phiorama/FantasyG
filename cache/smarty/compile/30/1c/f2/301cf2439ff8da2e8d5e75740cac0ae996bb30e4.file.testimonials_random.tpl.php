<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 11:08:50
         compiled from "/var/www/public/Manni/modules/postestimonials//views/templates/front/testimonials_random.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63821436857c6f3026ae047-79378023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '301cf2439ff8da2e8d5e75740cac0ae996bb30e4' => 
    array (
      0 => '/var/www/public/Manni/modules/postestimonials//views/templates/front/testimonials_random.tpl',
      1 => 1472653894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63821436857c6f3026ae047-79378023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'testimonials' => 0,
    'testimonial' => 0,
    'arr_img_type' => 0,
    'mediaUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6f3026f6884_01865651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6f3026f6884_01865651')) {function content_57c6f3026f6884_01865651($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['testimonials']->value) {?>
<div class="container">
	<div class="testimonials_container">
		<div class="header_title">
			<h3 class="fontcustom2"><?php echo sprintf("%02d",count($_smarty_tpl->tpl_vars['testimonials']->value));?>
 <?php echo smartyTranslate(array('s'=>'Testimonials','mod'=>'postestimonials'),$_smarty_tpl);?>
</h3>
		</div>
		<div class="block_content">
			<div class="row">
				<div class="testimonialsSlide">
				  <?php  $_smarty_tpl->tpl_vars['testimonial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['testimonial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['testimonials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['testimonial']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['testimonial']->iteration=0;
 $_smarty_tpl->tpl_vars['testimonial']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->key => $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->_loop = true;
 $_smarty_tpl->tpl_vars['testimonial']->iteration++;
 $_smarty_tpl->tpl_vars['testimonial']->index++;
 $_smarty_tpl->tpl_vars['testimonial']->first = $_smarty_tpl->tpl_vars['testimonial']->index === 0;
 $_smarty_tpl->tpl_vars['testimonial']->last = $_smarty_tpl->tpl_vars['testimonial']->iteration === $_smarty_tpl->tpl_vars['testimonial']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['testimonial']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['testimonial']->last;
?>
					<?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active']==1) {?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%1==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
						<div class="item-out">
						<?php }?>	
							<div class="item">
								<?php if (in_array($_smarty_tpl->tpl_vars['testimonial']->value['media_type'],$_smarty_tpl->tpl_vars['arr_img_type']->value)) {?>
									<div class="content_author_img">
										<img src="<?php echo $_smarty_tpl->tpl_vars['mediaUrl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['media'];?>
" class="testi_img img-responsive" alt="">
										<p class="testi_author fontcustom1"><?php echo $_smarty_tpl->tpl_vars['testimonial']->value['name_post'];?>
</p>
									</div>
								<?php }?>
								<div class="content_testi">
									<p class="des_testimonial fontcustom1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['testimonial']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
</p>
									
								</div>
							</div>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%1==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
						</div>
						<?php }?>
					<?php }?>
				  <?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		var testi = $(".testimonialsSlide");
		testi.owlCarousel({
			items : 2,
			itemsDesktop : [1199,2],
			itemsDesktopSmall : [991,2],
			itemsTablet: [767,2],
			itemsMobile : [480,1],
			autoPlay :  false,
			stopOnHover: false,
			addClassActive: true,
		});
	});
</script>
 <?php }?><?php }} ?>
