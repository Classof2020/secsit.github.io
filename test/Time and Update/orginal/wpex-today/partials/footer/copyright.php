<?php
/**
 * Footer copyright
 *
 * @package   Today WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Get copyright data
$copy = apply_filters( 'wpex_footer_copyright', 'Copyright &#169; 2016 <a href="http://timeandupdate" target="_blank" title="Get Updated">Time and Update</a> All Right Reserved ' );
$copy = wpex_sanitize( $copy, 'html' ); // Sanitize output, see inc/core-functions.php

// Display copyright
if ( $copy ) : ?>

	<div class="footer-copyright wpex-clr">
		<?php echo do_shortcode( wpex_sanitize( $copy, 'html' ) ); ?>
	</div><!-- .footer-copyright -->
<?php endif; ?>