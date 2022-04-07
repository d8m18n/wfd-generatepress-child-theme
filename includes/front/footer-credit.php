<?php
/**
 * Function to customise the footer credit - do not enable the customizer option.
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * In this theme we're using the Generate Press elements feature to create the footer,
 * so this is just a fall badk in case there's no element created.
 *
 * @return void
 */
function wfd_custom_copyright() {
	?>
	<p>© <?php the_date( 'Y' ); ?> WebFoundations</p>
	<p>Site by: <a href="https://webfoundations.com.au" target="_blank" title="WebFoundations | Digital Design and Marketing">WebFoundations</a>
	</p>
	<?php
};
