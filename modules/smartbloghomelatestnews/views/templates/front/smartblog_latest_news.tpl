{if isset($view_data) AND !empty($view_data)}
<div class="home_blog">
    <div class="header_title">
		<h3 class="fontcustom2">
			{"%02d"|sprintf:count($view_data)} {l s='FASHION NEWS' mod='smartbloghomelatestnews'}
		</h3>
		<a class="title_txt hidden" href="{smartblog::GetSmartBlogLink('smartblog')}">{l s='View all' mod='smartbloghomelatestnews'}</a> 
	</div>
	<div class="navi hidden">
		<a class="prevtab"><i class="icon-angle-left"></i></a>
		<a class="nexttab"><i class="icon-angle-right"></i></a>
	</div>
    <div class="blogSlider_container">
		<div class="row">
			<div class="blogSlider">
					{foreach from=$view_data item=post name=myLoop}
							{assign var="options" value=null}
							{$options.id_post = $post.id}
							{$options.slug = $post.link_rewrite}
							<div class="blog_item">
								<div class="blog_img_holder">
									 <a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}"><img alt="{$post.title}" class="feat_img_small img-responsive" src="{$modules_dir}smartblog/images/{$post.post_img}-home-default.jpg"></a>
								</div>
								<div class="blog_info">
									<p class="date_added">{$post.date_added|date_format}</p>
									<p class="post_title" title="{$post.title}">{$post.title}</p>
									<p class="date_desc fontcustom1">{$post.short_description|escape:'htmlall':'UTF-8'}</p>
									<a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="read_more">{l s='Read More' mod='smartbloghomelatestnews'}</a>
								</div>
							</div>
					{/foreach}
			 </div>
		 </div>
     </div>
</div>
<script>
	$(document).ready(function() {
		var blogSlider = $(".blogSlider");
		blogSlider.owlCarousel({
			items : 2,
			itemsDesktop : [1199,2],
			itemsDesktopSmall : [991,1],
			itemsTablet: [767,2],
			itemsMobile : [480,1],
			autoPlay :  false,
			stopOnHover: false,
			addClassActive: true,
		});
		
		// Custom Navigation Events
		$(".home_blog .nexttab").click(function(){
		blogSlider.trigger('owl.next');})
		$(".home_blog .prevtab").click(function(){
		blogSlider.trigger('owl.prev');})   
	});
</script>
{/if}