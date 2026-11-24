<?php
/**
 * Title: Hero, next bout
 * Slug: mid-hudson-misfits/hero-bout-night
 * Categories: featured
 * Description: Sticker, display headline, subhead and two buttons, from the Figma foundations tile. Sample copy; edit the date and links.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"stage","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"},"blockGap":"26px"}},"layout":{"type":"constrained","contentSize":"780px","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-stage-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:paragraph {"className":"is-style-sticker"} -->
	<p class="is-style-sticker"><?php echo esc_html_x( 'Next bout · Nov 14', 'Sample sticker text', 'mid-hudson-misfits' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php echo esc_html_x( 'Stronger', 'Hero headline, first word', 'mid-hudson-misfits' ); ?> <mark style="background-color:rgba(0, 0, 0, 0);color:var(--wp--preset--color--brand-glow)" class="has-inline-color"><?php echo esc_html_x( 'together.', 'Hero headline, highlighted word', 'mid-hudson-misfits' ); ?></mark></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"grey","fontSize":"body-lg","style":{"typography":{"lineHeight":"1.5"}}} -->
	<p class="has-grey-color has-text-color has-body-lg-font-size" style="line-height:1.5"><?php echo esc_html_x( 'Mid-Hudson Misfits Roller Derby. Teamwork, competition and unapologetic belonging for people of all genders.', 'Hero subhead', 'mid-hudson-misfits' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"style":{"spacing":{"blockGap":"20px"}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Join the pack', 'Primary button', 'mid-hudson-misfits' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Our team', 'Secondary button', 'mid-hudson-misfits' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
