<?php
/**
 * Title: Bout row
 * Slug: mid-hudson-misfits/bout-row
 * Categories: featured
 * Description: One bout in a list: date block, title and venue, and a tickets button. Sample copy; add the real ticket link.
 */
?>
<!-- wp:group {"className":"is-style-card","style":{"shadow":"none","spacing":{"blockGap":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-card" style="box-shadow:none">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"textColor":"brand-glow","fontFamily":"houndcats","style":{"typography":{"fontSize":"3.25rem","lineHeight":"0.9","letterSpacing":"-0.02em"}}} -->
		<p class="has-brand-glow-color has-text-color has-houndcats-font-family" style="font-size:3.25rem;letter-spacing:-0.02em;line-height:0.9"><?php echo esc_html_x( '14', 'Sample day of month', 'mid-hudson-misfits' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"grey","fontSize":"label","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
		<p class="has-grey-color has-text-color has-label-font-size" style="font-weight:700;line-height:1"><?php echo esc_html_x( 'Nov', 'Sample month', 'mid-hudson-misfits' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700","lineHeight":"1.2"}}} -->
		<p style="font-size:1.25rem;font-weight:700;line-height:1.2"><?php echo esc_html_x( 'Home bout', 'Sample bout title', 'mid-hudson-misfits' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"grey","fontSize":"label"} -->
		<p class="has-grey-color has-text-color has-label-font-size"><?php echo esc_html_x( 'Skate Time · 6pm', 'Sample venue and time', 'mid-hudson-misfits' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"fontSize":"label","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"16px","right":"16px"}},"shadow":"none"}} -->
		<div class="wp-block-button has-custom-font-size has-label-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px;box-shadow:none"><?php echo esc_html_x( 'Tickets', 'Button', 'mid-hudson-misfits' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
