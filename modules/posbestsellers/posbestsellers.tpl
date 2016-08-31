{if count($best_sellers) > 0 && $best_sellers != null}
<div class="posbestsellers block">
	<div class="title_block">
		<p class="fontcustom1">{l s='Best seller' mod='posbestsellers'}</p>
		<div class="navi hidden">
			<a class="prevtab"><i class="icon-caret-left"></i></a>
			<a class="nexttab"><i class="icon-caret-right"></i></a>
		</div>
	</div>
	<div class="side_container block_content"> 
		<div class="product_side_content"> 
			<div class="row">
				<div class="posbestsellers_sld">
					{foreach from=$best_sellers item=product name=myLoop}
						{if $smarty.foreach.myLoop.index % 3 == 0 || $smarty.foreach.myLoop.first }
							<div class="item_out">
						{/if}
							<div class="item">
								<div class="left-block">
									<a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
										<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'medium_default')|escape:'html'}"
										alt="{$product.legend|escape:'html':'UTF-8'}"
										class="img-responsive"/>
									</a>
									{if (!$PS_CATALOG_MODE && ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
										{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
											{if $product.price_without_reduction > 0 && isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
												{if $product.specific_prices.reduction_type == 'percentage'}
													<span class="percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
												{/if}
											{/if}
											
										{/if}
									{/if}
								</div>
								<div class="right-block">
									<h5>
										<a class="product-name" href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">
											{$product.name|escape:'htmlall':'UTF-8'}
										</a>
									</h5>
									<div class="price-box">
										<meta itemprop="priceCurrency" content="{$priceDisplay}" />
										<span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span>
										{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
											<span class="old-price product-price titleFont">
												{displayWtPrice p=$product.price_without_reduction}
											</span>
										{/if}
									</div>
									<div class="hook-reviews">
										{hook h='displayProductListReviews' product=$product}
									</div>
									<div class="btn_in">
										{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
											{if ($product.allow_oosp || $product.quantity > 0)}
												{if isset($static_token)}
													<a class="exclusive ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart' mod='posbestsellers'}" data-id-product="{$product.id_product|intval}">
														<i class="icon2-basket"></i>
													</a>
												{else}
													<a class="exclusive ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart' mod='posbestsellers'}" data-id-product="{$product.id_product|intval}">
														<i class="icon2-basket"></i>
													</a>
												{/if}
											{/if}
										{/if}
										{if isset($quick_view) && $quick_view}
											<a 	title="{l s='Quick view' mod='posbestsellers'}"
												class="quick-view"
												href="{$product.link|escape:'html':'UTF-8'}">
												<i class="icon2-magnifier-add"></i>
											</a>
										{/if}
										{* {hook h='displayProductListFunctionalButtons' product=$product} 
										{if isset($comparator_max_item) && $comparator_max_item}
											<a class="add_to_compare" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Add to Compare' mod='posbestsellers'}" data-id-product="{$product.id_product}">
												<i class="icon2-refresh"></i>
											</a>
										{/if} *}
									</div>
								</div>
							</div>
						{if $smarty.foreach.myLoop.iteration % 3 == 0 || $smarty.foreach.myLoop.last}
							</div>
						{/if}
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		var posbestsellers = $(".posbestsellers_sld");
		posbestsellers.owlCarousel({
			singleItem: true,
			addClassActive: true,
		});
		$(".posbestsellers .nexttab").click(function(){
			posbestsellers.trigger('owl.next');})
		$(".posbestsellers .prevtab").click(function(){
			posbestsellers.trigger('owl.prev');})
	});
</script>
{/if}