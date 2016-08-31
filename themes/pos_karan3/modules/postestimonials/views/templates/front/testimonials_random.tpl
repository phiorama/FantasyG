{if $testimonials}
	<div class="testimonials_container">
		<ul class="nav nav-tabs">
			{$count = 0}
			{foreach from=$testimonials name=myLoop item=testimonial}
				{$count = $count+1}
				{if $testimonial.active == 1}
					<li {if $count==2}class="active"{/if}>
						<a data-toggle="tab" href="#testimonials_content{$count}">
							{if in_array($testimonial.media_type,$arr_img_type)}
								<img src="{$mediaUrl}{$testimonial.media}" class="testi_img img-responsive" alt="">
							{/if}
						</a>
					</li>
				{/if}
			{/foreach}
		</ul>
		<div class="tab-content">
			{$counts=0}
			{foreach from=$testimonials name=myLoop item=testimonial}
				{$counts = $counts+1}
				<div id="testimonials_content{$counts}" class="tab-pane fade {if $counts==2}in active{/if}">
					<p class="testi_author">{$testimonial.name_post}</p>
					<p class="testi_email fontcustom1">{$testimonial.email}</p>
					<p class="des_testimonial fontcustom1">{$testimonial.content|escape:'html':'UTF-8'}</p>
				</div>
			{/foreach}
		</div>
	</div>
{/if}