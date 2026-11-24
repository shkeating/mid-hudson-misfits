<?php
/**
 * Title: Home: last game and newsletter
 * Slug: mid-hudson-misfits/home-last-game
 * Categories: mhm-home
 * Description: "Our last game!" sticker, photo, and the newsletter signup card.
 */
$mhm = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"mhm-band","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-band">
<!-- wp:group {"className":"mhm-stage mhm-stage--c","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-stage mhm-stage--c">
<!-- wp:paragraph {"className":"mhm-abs mhm-c-sticker mhm-sticker"} -->
<p class="mhm-abs mhm-c-sticker mhm-sticker"><?php esc_html_e( 'Our last game!', 'mid-hudson-misfits' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mhm-abs mhm-c-image"} -->
<figure class="wp-block-image size-full mhm-abs mhm-c-image"><img src="<?php echo esc_url( $mhm ); ?>last-game.webp" alt="<?php echo esc_attr__( 'Wide shot of the Misfits and their opponents lined up after the last bout', 'mid-hudson-misfits' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"mhm-abs mhm-c-news","layout":{"type":"default"}} -->
<div class="wp-block-group mhm-abs mhm-c-news">
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Get bout news in your inbox', 'mid-hudson-misfits' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<form class="mhm-signup" action="#" method="post">
<label for="mhm-home-email">Email address</label>
<input id="mhm-home-email" type="email" name="email" placeholder="Email" autocomplete="email" required>
<button type="submit">Submit</button>
</form>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
