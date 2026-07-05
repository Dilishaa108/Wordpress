<?php
/**
 * Title: 404 Header With Background
 * Slug: drinkify-lite/404-header-with-background
 * Categories: drinkify-lite, header
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"banner","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide banner" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:cover {"align":"full","overlayColor":"secondary-bg-color","isDark":false,"className":"is-dark"} -->
	<div class="wp-block-cover alignfull is-light is-dark"><span aria-hidden="true" class="wp-block-cover__background has-secondary-bg-color-background-color has-background-dim-100 has-background-dim"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"alignwide"} -->
				<div class="wp-block-group alignwide">
					<!-- wp:heading {"level":1,"textColor":"title-color","className":"has-text-color-title-color"} -->
					<h1 class="has-text-color-title-color has-title-color-color has-text-color"><?php esc_html_e('404 Nothing Found', 'drinkify-lite'); ?></h1>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p><?php esc_html_e("Oops! That page can't be found", 'drinkify-lite'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
