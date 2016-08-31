{if count($products) > 0 && $products != null}
<div class="container">
	<div class="pos_new_product product_container">
		<div class="header_title">
			<h3 class="fontcustom2">{"%02d"|sprintf:count($products)} {l s='New Products' mod='posnewproduct'}</h3>
		</div>
		<div class="product_content">
			<div class="navi">
				<a class="prevtab"><i class="icon-angle-left"></i></a>
				<a class="nexttab"><i class="icon-angle-right"></i></a>
			</div>
			<div class="row">
				<div class="newSlide">
					{foreach from=$products item=product name=myLoop}
						{if $smarty.foreach.myLoop.index % 1 == 0 || $smarty.foreach.myLoop.first }
							<div class="item_out">
						{/if}
							<div class="item">
								<div class="left-block">
									<a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
										<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}"
										alt="{$product.legend|escape:'html':'UTF-8'}"
										class="img-responsive"/>
									</a>
									{if isset($product.new) && $product.new == 1}
										<a class="new-box titleFont" href="{$product.link|escape:'html':'UTF-8'}">
											{l s='new' mod='posnewproduct'}
										</a>
									{/if}
									{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
										<a class="sale-box titleFont" href="{$product.link|escape:'html':'UTF-8'}">
											{l s='sale' mod='posnewproduct'}
										</a>
									{/if}
									{if isset($quick_view) && $quick_view}
										<a 	title="{l s='Quick view' mod='posnewproduct'}"
											class="quick-view quick-view-lg visible-lg"
											href="{$product.link|escape:'html':'UTF-8'}">
											<i class="icon2-magnifier-add"></i>
										</a>
									{/if}
									{if (!$PS_CATALOG_MODE && ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
										{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
											<meta itemprop="priceCurrency" content="{$currency->iso_code}" />
											{if $product.price_without_reduction > 0 && isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
												{if $product.specific_prices.reduction_type == 'percentage'}
													<span class="percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
												{/if}
											{/if}
											
										{/if}
									{/if}
									<div class="btn_container">
										<div class="btn_in">
											{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
												{if ($product.allow_oosp || $product.quantity > 0)}
													{if isset($static_token)}
														<a class="exclusive ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart' mod='posnewproduct'}" data-id-product="{$product.id_product|intval}">
															<i class="icon2-basket"></i>
														</a>
													{else}
														<a class="exclusive ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart' mod='posnewproduct'}" data-id-product="{$product.id_product|intval}">
															<i class="icon2-basket"></i>
														</a>
													{/if}
												{/if}
											{/if}
											{if isset($quick_view) && $quick_view}
												<a 	title="{l s='Quick view' mod='posnewproduct'}"
													class="quick-view hidden-lg"
													href="{$product.link|escape:'html':'UTF-8'}">
													<i class="icon2-magnifier-add"></i>
												</a>
											{/if}
											{hook h='displayProductListFunctionalButtons' product=$product}
											{if isset($comparator_max_item) && $comparator_max_item}
												<a class="add_to_compare" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Add to Compare' mod='posnewproduct'}" data-id-product="{$product.id_product}">
													<i class="icon2-refresh"></i>
												</a>
											{/if}
										</div>
									</div>
								</div>
								<div class="right-block">
									<h5>
										<a class="product-name" href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">
											{$product.name|escape:'htmlall':'UTF-8'}
										</a>
									</h5>
									{* <div class="hook-reviews">
										{hook h='displayProductListReviews' product=$product}
									</div> *}
									<div class="price-box">
										<meta itemprop="priceCurrency" content="{$priceDisplay}" />
										<span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span>
										{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
											<span class="old-price product-price titleFont">
												{displayWtPrice p=$product.price_without_reduction}
											</span>
										{/if}
									</div>
								</div>
							</div>
						{if $smarty.foreach.myLoop.iteration % 1 == 0 || $smarty.foreach.myLoop.last}
							</div>
						{/if}
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>
	<script>
		$(document).ready(function() {
			var newSlide = $(".newSlide");
			newSlide.owlCarousel({
				items : 4,
				itemsDesktop : [1199,4],
				itemsDesktopSmall : [991,3],
				itemsTablet: [767,2],
				itemsMobile : [480,1],
				autoPlay :  false,
				stopOnHover: false,
				addClassActive: true,
			});
			$(".pos_new_product .nexttab").click(function(){
				newSlide.trigger('owl.next');})
			$(".pos_new_product .prevtab").click(function(){
				newSlide.trigger('owl.prev');})
		});
	</script>
{/if}