<?php
/**
 * Wfd-child theme modifications. Functions that hook into, and modify, the GeneratePress theme.
 *
 * @package WordPress
 * @subpackage wfd-child
 * @since wfd-child 1.0.0
 */

/**
 * Add button after main navigation.
 *
 * @return void
 */
function wfd_add_header_button() {
	?>
		<a class="button main-nav__button" href="#" target="_blank">Get Started</a>
	<?php
}
