<?php
/**
 * Title: Home: photo strip and join
 * Slug: mid-hudson-misfits/home-join
 * Categories: mhm-home
 * Description: Photo strip and the pink "Stronger together" section with patch and calls to action.
 */
$mhm = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"mhm-band","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-band">
<!-- wp:group {"className":"mhm-stage mhm-stage--b","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-stage mhm-stage--b">
<!-- wp:group {"className":"mhm-panels mhm-panels--b","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-panels mhm-panels--b">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-b-panel3"} -->
<figure class="wp-block-image size-full mhm-abs mhm-b-panel3"><img src="<?php echo esc_url( $mhm ); ?>panel-3.webp" alt="<?php echo esc_attr__( 'Misfits skaters celebrating together on the track', 'mid-hudson-misfits' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-b-panel4"} -->
<figure class="wp-block-image size-full mhm-abs mhm-b-panel4"><img src="<?php echo esc_url( $mhm ); ?>panel-4.webp" alt="<?php echo esc_attr__( 'Skater leaning into a turn during a jam', 'mid-hudson-misfits' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-b-panel5"} -->
<figure class="wp-block-image size-full mhm-abs mhm-b-panel5"><img src="<?php echo esc_url( $mhm ); ?>panel-5.webp" alt="<?php echo esc_attr__( 'Fans cheering at the edge of the track', 'mid-hudson-misfits' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:separator {"className":"mhm-line mhm-abs mhm-b-l2","backgroundColor":"paper"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background has-paper-background-color has-paper-color mhm-line mhm-abs mhm-b-l2"/>
<!-- /wp:separator -->
<!-- wp:separator {"className":"mhm-line mhm-abs mhm-b-l5","backgroundColor":"paper"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background has-paper-background-color has-paper-color mhm-line mhm-abs mhm-b-l5"/>
<!-- /wp:separator -->
<!-- wp:separator {"className":"mhm-line mhm-abs mhm-b-l7","backgroundColor":"paper"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background has-paper-background-color has-paper-color mhm-line mhm-abs mhm-b-l7"/>
<!-- /wp:separator -->
<!-- wp:separator {"className":"mhm-line mhm-abs mhm-b-l6","backgroundColor":"paper"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background has-paper-background-color has-paper-color mhm-line mhm-abs mhm-b-l6"/>
<!-- /wp:separator -->
<!-- wp:group {"className":"mhm-abs mhm-b-pink","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-abs mhm-b-pink">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-b-patch"} -->
<figure class="wp-block-image size-full mhm-abs mhm-b-patch"><img src="<?php echo esc_url( $mhm ); ?>patch.webp" alt="<?php echo esc_attr__( 'Misfits league patch', 'mid-hudson-misfits' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"mhm-abs mhm-b-copy","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-abs mhm-b-copy">
<!-- wp:heading {"level":1,"className":"mhm-b-h"} -->
<h1 class="wp-block-heading mhm-b-h"><?php esc_html_e( 'Stronger', 'mid-hudson-misfits' ); ?> <span class="mhm-ink"><?php esc_html_e( 'together', 'mid-hudson-misfits' ); ?></span></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mhm-b-sub"} -->
<p class="mhm-b-sub"><?php esc_html_e( 'Flat track roller derby in the Hudson Valley. Come skate with us, volunteer, or just watch the hits.', 'mid-hudson-misfits' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"mhm-btn-plum mhm-tilt-r"} -->
<div class="wp-block-button mhm-btn-plum mhm-tilt-r"><a class="wp-block-button__link wp-element-button" href="/join/"><?php esc_html_e( 'Join the league', 'mid-hudson-misfits' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"mhm-btn-ink mhm-tilt-l"} -->
<div class="wp-block-button mhm-btn-ink mhm-tilt-l"><a class="wp-block-button__link wp-element-button" href="/bouts/"><?php esc_html_e( 'See the schedule', 'mid-hudson-misfits' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
