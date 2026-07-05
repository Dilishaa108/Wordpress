<?php

/**
 * Title: Sidebar
 * Slug: drinkify-lite/sidebar
 * Categories: drinkify-lite, featured,pages
 */
?>
<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar">
	<!-- wp:group {"className":"wp-block-widget about"} -->
	<div class="wp-block-group wp-block-widget about">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Search', 'drinkify-lite'); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","placeholder":"Search..."} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget about"} -->
	<div class="wp-block-group wp-block-widget about">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Follow us', 'drinkify-lite'); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:social-links -->
		<ul class="wp-block-social-links">
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
			<!-- wp:social-link {"url":"#","service":"WordPress"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget about"} -->
	<div class="wp-block-group wp-block-widget about">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Category', 'drinkify-lite'); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:categories {"showPostCounts":true} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Recent Post', 'drinkify-lite'); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:latest-posts {"excerptLength":10,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="tags" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Tags', 'drinkify-lite'); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:tag-cloud {"numberOfTags":15} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
