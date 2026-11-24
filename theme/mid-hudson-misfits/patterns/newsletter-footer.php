<?php
/**
 * Title: Footer newsletter card
 * Slug: mid-hudson-misfits/newsletter-footer
 * Inserter: false
 * Description: Small email signup card for the footer. The form posts nowhere yet; connect it to the league's mailing list tool.
 */
?>
<!-- wp:html -->
<div class="mhm-footer__newsletter">
<p>Get bout news in your inbox</p>
<form class="mhm-signup" action="#" method="post">
<label for="mhm-foot-email">Email address</label>
<input id="mhm-foot-email" type="email" name="email" placeholder="Email" autocomplete="email" required>
<button type="submit">Submit</button>
</form>
</div>
<!-- /wp:html -->
