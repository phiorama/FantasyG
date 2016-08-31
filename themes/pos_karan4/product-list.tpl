{if isset($products) && $products}
	<!-- Products list -->
	<ul{if isset($id) && $id} id="{$id}"{/if} class="product_list product_content grid row{if isset($class) && $class} {$class}{/if}">
	{foreach from=$products item=product name=products}
		<li class="ajax_block_product col-xs-12 col-sm-6 col-lg-4">
			<div class="product-container item" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
						<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}"
						alt="{$product.legend|escape:'html':'UTF-8'}"
						class="img-responsive"/>
					</a>
					{if isset($product.new) && $product.new == 1}
						<a class="new-box titleFont" href="{$product.link|escape:'html':'UTF-8'}">
							{l s='new'}
						</a>
					{/if}
					{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
						<a class="sale-box titleFont" href="{$product.link|escape:'html':'UTF-8'}">
							{l s='sale'}
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
					{if isset($quick_view) && $quick_view}
						<a 	title="{l s='Quick view'}"
							class="quick-view quick-view-lg visible-lg"
							href="{$product.link|escape:'html':'UTF-8'}">
							<i class="icon2-magnifier-add"></i>
						</a>
					{/if}
					<div class="btn_container">
						<div class="btn_in">
							{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
								{if ($product.allow_oosp || $product.quantity > 0)}
									{if isset($static_token)}
										<a class="exclusive ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
											<i class="icon2-basket"></i>
										</a>
									{else}
										<a class="exclusive ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
											<i class="icon2-basket"></i>
										</a>
									{/if}
								{/if}
							{/if}
							{if isset($quick_view) && $quick_view}
								<a 	title="{l s='Quick view'}"
									class="quick-view hidden-lg"
									href="{$product.link|escape:'html':'UTF-8'}">
									<i class="icon2-magnifier-add"></i>
								</a>
							{/if}
							{hook h='displayProductListFunctionalButtons' product=$product}
							{if isset($comparator_max_item) && $comparator_max_item}
								<a class="add_to_compare" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Add to Compare'}" data-id-product="{$product.id_product}">
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
					<div class="hook-reviews">
						{hook h='displayProductListReviews' product=$product}
					</div> 
					<div class="price-box">
						<meta itemprop="priceCurrency" content="{$priceDisplay}" />
						<span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span>
						{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
							<span class="old-price product-price titleFont">
								{displayWtPrice p=$product.price_without_reduction}
							</span>
						{/if}
					</div>
					<p class="product-desc fontcustom1" itemprop="description">
						{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}
					</p>
					<div class="btn_list">
						{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
							{if ($product.allow_oosp || $product.quantity > 0)}
								{if isset($static_token)}
									<a class="exclusive ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
										<i class="icon2-basket"></i><span>{l s='Add to cart'}</span>
									</a>
								{else}
									<a class="exclusive ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
										<i class="icon2-basket"></i><span>{l s='Add to cart'}</span>
									</a>
								{/if}
							{/if}
						{/if}
						{if isset($quick_view) && $quick_view}
							<a 	title="{l s='Quick view'}"
								class="quick-view"
								href="{$product.link|escape:'html':'UTF-8'}">
								<i class="icon2-magnifier-add"></i>
							</a>
						{/if}
						{hook h='displayProductListFunctionalButtons' product=$product}
						{if isset($comparator_max_item) && $comparator_max_item}
							<a class="add_to_compare" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Add to Compare'}" data-id-product="{$product.id_product}">
								<i class="icon2-refresh"></i>
							</a>
						{/if}
					</div>
				</div>
			</div><!-- .product-container> -->
		</li>
	{/foreach}
	</ul>
{addJsDefL name=min_item}{l s='Please select at least one product' js=1}{/addJsDefL}
{addJsDefL name=max_item}{l s='You cannot add more than %d product(s) to the product comparison' sprintf=$comparator_max_item js=1}{/addJsDefL}
{addJsDef comparator_max_item=$comparator_max_item}
{addJsDef comparedProductsIds=$compared_products}
{/if}
