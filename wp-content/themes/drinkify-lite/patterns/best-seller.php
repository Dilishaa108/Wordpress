<?php
/**
 * Title: Best Seller
 * Slug: drinkify-lite/best-seller
 * Categories: drinkify-lite, featured
 */
?>

<!-- wp:group {"align":"full","className":"product best-seller-section wp-block-section scroller-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull product best-seller-section wp-block-section scroller-section">
	<!-- wp:group {"align":"wide","className":"section-heading","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section-heading">
		<!-- wp:group {"align":"wide","className":"section-heading","layout":{"className":"section-heading","type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide section-heading"><!-- wp:heading {"fontSize":"section-title"} -->
			<h2 class="wp-block-heading has-section-title-font-size"><?php esc_html_e('Best Seller', 'drinkify-lite'); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-drinkify-button"} -->
				<div class="wp-block-button is-style-drinkify-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('All Natural Wines', 'drinkify-lite'); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","className":"inner-wrap","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull inner-wrap">
		<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":6,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":6,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/best-sellers","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"wide"} -->
		<div class="wp-block-woocommerce-product-collection alignwide"><!-- wp:woocommerce/product-template -->
			<!-- wp:template-part {"slug":"product-collection"} /-->
			<!-- /wp:woocommerce/product-template -->
		</div>
		<!-- /wp:woocommerce/product-collection -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
