<?php
/**
 * Title: Scoreboard, next bout date
 * Slug: mid-hudson-misfits/scoreboard
 * Categories: featured
 * Description: Big date card for the next bout, from the Figma foundations tile. Sample copy; the star row from the design needs its exported SVG and is not included.
 */
?>
<!-- wp:group {"className":"is-style-scoreboard","style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-scoreboard">
	<!-- wp:paragraph {"textColor":"grey","style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1"}}} -->
	<p class="has-grey-color has-text-color" style="font-size:1rem;font-weight:700;line-height:1"><?php echo esc_html_x( 'Sat', 'Sample weekday', 'mid-hudson-misfits' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"brand-glow","fontSize":"numeral","fontFamily":"houndcats","style":{"typography":{"lineHeight":"0.9","letterSpacing":"-0.02em"}}} -->
	<p class="has-brand-glow-color has-text-color has-houndcats-font-family has-numeral-font-size" style="letter-spacing:-0.02em;line-height:0.9"><?php echo esc_html_x( '14', 'Sample day of month', 'mid-hudson-misfits' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"4rem","fontWeight":"900","lineHeight":"0.9","letterSpacing":"-0.02em"}}} -->
	<p style="font-size:4rem;font-weight:900;letter-spacing:-0.02em;line-height:0.9"><?php echo esc_html_x( 'Nov', 'Sample month', 'mid-hudson-misfits' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"700","lineHeight":"1"}}} -->
	<p style="font-size:0.9375rem;font-weight:700;line-height:1"><?php echo esc_html_x( 'Home bout · Doors 5pm', 'Sample detail line', 'mid-hudson-misfits' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
