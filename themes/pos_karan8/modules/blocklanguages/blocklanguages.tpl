<!-- Block languages module -->
{if count($languages) > 1}
	<div id="languages-block-top" class="user_header">
		<span class="title_top">{l s='Currencies' mod='blockcurrencies'}</span>
		<ul id="first-languages" class="languages-block">
			{foreach from=$languages key=k item=language name="languages"}
				<li {if $language.iso_code == $lang_iso}class="selected"{/if}>
					{if $language.iso_code != $lang_iso}
						{assign var=indice_lang value=$language.id_lang}
						{if isset($lang_rewrite_urls.$indice_lang)}
							<a href="{$lang_rewrite_urls.$indice_lang|escape:'html':'UTF-8'}" title="{$language.name|escape:'html':'UTF-8'}" rel="alternate" hreflang="{$language.iso_code|escape:'html':'UTF-8'}">
						{else}
							<a href="{$link->getLanguageLink($language.id_lang)|escape:'html':'UTF-8'}" title="{$language.name|escape:'html':'UTF-8'}" rel="alternate" hreflang="{$language.iso_code|escape:'html':'UTF-8'}">
						{/if}
					{/if}
						{$language.name|regex_replace:"/\s\(.*\)$/":""}
					{if $language.iso_code != $lang_iso}
						</a>
					{/if}
				</li>
			{/foreach}
		</ul>
	</div>
{/if}
<!-- /Block languages module -->
