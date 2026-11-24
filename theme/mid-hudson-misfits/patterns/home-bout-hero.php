<?php
/**
 * Title: Home: bout hero
 * Slug: mid-hudson-misfits/home-bout-hero
 * Categories: mhm-home
 * Description: Panels, skater drawing, scoreboard and sticker for the next bout. Placed from the 1440px Figma comp; stacks on mobile.
 */
$mhm = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"mhm-band","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-band">
<!-- wp:group {"className":"mhm-stage mhm-stage--a","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-stage mhm-stage--a">
<!-- wp:group {"className":"mhm-panels mhm-panels--a","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-panels mhm-panels--a">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-a-panel1"} -->
<figure class="wp-block-image size-full mhm-abs mhm-a-panel1"><img src="<?php echo esc_url( $mhm ); ?>panel-1.webp" alt="<?php echo esc_attr__( 'Misfits skaters in a jam during a home bout', 'mid-hudson-misfits' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-a-panel2"} -->
<figure class="wp-block-image size-full mhm-abs mhm-a-panel2"><img src="<?php echo esc_url( $mhm ); ?>panel-2.webp" alt="<?php echo esc_attr__( 'Skaters lined up on the track before the whistle', 'mid-hudson-misfits' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:separator {"className":"mhm-line mhm-abs mhm-a-l1","backgroundColor":"paper"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background has-paper-background-color has-paper-color mhm-line mhm-abs mhm-a-l1"/>
<!-- /wp:separator -->
<!-- wp:separator {"className":"mhm-line mhm-abs mhm-a-l3","backgroundColor":"paper"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background has-paper-background-color has-paper-color mhm-line mhm-abs mhm-a-l3"/>
<!-- /wp:separator -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-a-fast"} -->
<figure class="wp-block-image size-full mhm-abs mhm-a-fast"><img src="<?php echo esc_url( $mhm ); ?>fast-lines.svg" alt=""/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"mhm-a-row","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-a-row">
<!-- wp:group {"className":"mhm-a-skater-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-a-skater-wrap">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-a-skater"} -->
<figure class="wp-block-image size-full mhm-abs mhm-a-skater"><img src="<?php echo esc_url( $mhm ); ?>skater.webp" alt="<?php echo esc_attr__( 'Drawing of a Misfits skater mid-stride, helmet on, arm swinging', 'mid-hudson-misfits' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-a-star1"} -->
<figure class="wp-block-image size-full mhm-abs mhm-a-star1"><img src="<?php echo esc_url( $mhm ); ?>big-star-1.svg" alt=""/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-a-star2"} -->
<figure class="wp-block-image size-full mhm-abs mhm-a-star2"><img src="<?php echo esc_url( $mhm ); ?>big-star-2.svg" alt=""/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mhm-abs mhm-a-score mhm-score","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-abs mhm-a-score mhm-score">
<!-- wp:paragraph {"className":"mhm-score__day"} -->
<p class="mhm-score__day"><?php esc_html_e( 'Sunday', 'mid-hudson-misfits' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mhm-score__num"} -->
<p class="mhm-score__num"><?php esc_html_e( '13', 'mid-hudson-misfits' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mhm-score__month"} -->
<p class="mhm-score__month"><?php esc_html_e( 'Dec', 'mid-hudson-misfits' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-score__stars"} -->
<figure class="wp-block-image size-full mhm-score__stars"><img src="<?php echo esc_url( $mhm ); ?>star-row.svg" alt=""/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"mhm-score__meta"} -->
<p class="mhm-score__meta"><?php esc_html_e( 'Skate Time · Doors ?pm', 'mid-hudson-misfits' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mhm-abs mhm-a-sticker mhm-sticker"} -->
<p class="mhm-abs mhm-a-sticker mhm-sticker"><?php esc_html_e( 'Our next bout...', 'mid-hudson-misfits' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
