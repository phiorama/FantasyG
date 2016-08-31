{if $testimonials}
<div class="container">
	<div class="testimonials_container">
		<div class="header_title">
			<h3 class="fontcustom2">{"%02d"|sprintf:count($testimonials)} {l s='Testimonials' mod='postestimonials'}</h3>
		</div>
		<div class="block_content">
			<div class="row">
				<div class="testimonialsSlide">
				  {foreach from=$testimonials name=myLoop item=testimonial}
					{if $testimonial.active == 1}
						{if $smarty.foreach.myLoop.index % 1 == 0 || $smarty.foreach.myLoop.first }
						<div class="item-out">
						{/if}	
							<div class="item">
								{if in_array($testimonial.media_type,$arr_img_type)}
									<div class="content_author_img">
										<img src="{$mediaUrl}{$testimonial.media}" class="testi_img img-responsive" alt="">
										<p class="testi_author fontcustom1">{$testimonial.name_post}</p>
									</div>
								{/if}
								<div class="content_testi">
									<p class="des_testimonial fontcustom1">{$testimonial.content|escape:'html':'UTF-8'}</p>
									
								</div>
							</div>
						{if $smarty.foreach.myLoop.iteration % 1 == 0 || $smarty.foreach.myLoop.last  }
						</div>
						{/if}
					{/if}
				  {/foreach}
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
 {/if}