<?php

/**
 * Title: Product Sidebar
 * Slug: drinkify-lite/product-sidebar
 * Categories: drinkify-lite, page
 */
?>

<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar product-sidebar">
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget ">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e('Product Categories', 'drinkify-lite'); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:woocommerce/product-categories /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget"><!-- wp:woocommerce/filter-wrapper {"filterType":"stock-filter","heading":"Filter by stock status"} -->
		<div class="wp-block-woocommerce-filter-wrapper">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e('Filter by stock status', 'drinkify-lite'); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/stock-filter {"heading":"","lock":{"remove":true}} -->
			<div class="wp-block-woocommerce-stock-filter is-loading" data-show-counts="true" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-stock-filter__placeholder"></span></div>
			<!-- /wp:woocommerce/stock-filter -->
		</div>
		<!-- /wp:woocommerce/filter-wrapper -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">

		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e('Filter by price', 'drinkify-lite'); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:woocommerce/price-filter {"showFilterButton":true,"heading":""} -->
		<div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true" data-showfilterbutton="true" data-heading="" data-heading-level="3">
			<span aria-hidden="true" class="wc-block-product-categories__placeholder"></span>
		</div>
		<!-- /wp:woocommerce/price-filter -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e('Filter by price', 'drinkify-lite'); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:woocommerce/attribute-filter {"attributeId":2,"heading":""} -->
		<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="2" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3">
			<span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span>
		</div>
		<!-- /wp:woocommerce/attribute-filter -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e('Filter by Color', 'drinkify-lite'); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:woocommerce/attribute-filter {"attributeId":1,"heading":""} -->
		<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="1" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3">
			<span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span>
		</div>
		<!-- /wp:woocommerce/attribute-filter -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
