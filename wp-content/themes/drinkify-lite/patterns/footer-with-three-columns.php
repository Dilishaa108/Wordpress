<?php
/**
 * Title: Footer With Three Columns
 * Slug: drinkify-lite/footer-with-three-columns
 * Categories: drinkify-lite, footer
 */
?>

<!-- wp:group {"align":"full","className":"footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull footer">
	<!-- wp:columns {"align":"wide","className":"upper-footer"} -->
	<div class="wp-block-columns alignwide upper-footer">
		<!-- wp:column {"className":"footer-contact"} -->
		<div class="wp-block-column footer-contact"><!-- wp:paragraph {"className":"footer-title footer-site-title"} -->
			<p class="footer-title footer-site-title"><?php esc_html_e('Drinkify Lite', 'drinkify-lite'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e('Drinkify is a premium eCommerce WordPress block theme perfect to create a website for a liquor shop', 'drinkify-lite'); ?>.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"footer-title","fontSize":"normal"} -->
			<p class="footer-title has-normal-font-size"><?php esc_html_e('About', 'drinkify-lite'); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph {"className":"footer-title","fontSize":"upper-heading"} -->
			<p class="footer-title has-upper-heading-font-size"><?php esc_html_e('Contact', 'drinkify-lite'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"fontSize":"upper-heading"} -->
				<p class="has-upper-heading-font-size"><?php esc_html_e('+123 456 7890', 'drinkify-lite'); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"upper-heading"} -->
				<p class="has-upper-heading-font-size"><?php esc_html_e('171 Horseshoe Crescent,', 'drinkify-lite'); ?>

					<br><?php esc_html_e('Beimingham, B43 7BH', 'drinkify-lite'); ?>

				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:social-links {"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

				<!-- wp:social-link {"url":"#","service":"twitter"} /-->

				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator bottom-footer","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull wp-block-footer wp-block-site-generator bottom-footer">
		<!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
		<div class="wp-block-group alignwide wp-block-site-info">
			<!-- wp:paragraph -->
			<p>
				<?php
				printf(
					/* translators: %1$s: Year, %2$s: Year */
					esc_html_x('Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'drinkify-lite'),
					esc_attr(date_i18n(__('Y', 'drinkify-lite'))),
					'<a href="' . esc_url(home_url('/')) . '">' . esc_attr(get_bloginfo('name', 'display')) . '</a><span class="sep"> | </span>Drinkify Liteby <a target="_blank" href="https://catchthemes.com">Catch Themes</a>'
				);
				?>
			</p>
			<!-- /wp:paragraph -->
			<!-- wp:navigation {"overlayMenu":"never","fontSize":"extra-small"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
