{if $PS_SC_TWITTER || $PS_SC_FACEBOOK || $PS_SC_GOOGLE || $PS_SC_PINTEREST}
	<div class="socialsharing_product list-inline no-print">
		<span class="share_label titleFont">{l s="Share" mod='socialsharing'}</span>
		{if $PS_SC_TWITTER}
			<button data-type="twitter" type="button" class="btn btn-default btn-twitter social-sharing">
				<i class="icon-twitter"></i> {l s="Tweet" mod='socialsharing'}
			</button>
		{/if}
		{if $PS_SC_FACEBOOK}
			<button data-type="facebook" type="button" class="btn btn-default btn-facebook social-sharing">
				<i class="icon-facebook"></i> {l s="Share" mod='socialsharing'}
			</button>
		{/if}
		{if $PS_SC_GOOGLE}
			<button data-type="google-plus" type="button" class="btn btn-default btn-google-plus social-sharing">
				<i class="icon-google-plus"></i> {l s="Google+" mod='socialsharing'}
			</button>
		{/if}
		{if $PS_SC_PINTEREST}
			<button data-type="pinterest" type="button" class="btn btn-default btn-pinterest social-sharing">
				<i class="icon-pinterest"></i> {l s="Pinterest" mod='socialsharing'}
			</button>
		{/if}
	</div>
{/if}