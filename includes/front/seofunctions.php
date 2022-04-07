<?php
/**
 * wfd-child SEO functions. Functions that rectify SEO issues.
 *
 * @package WordPress
 * @subpackage wfd-child
 * @since wfd-child 1.0.0
 */

/**
 * Function to add alt tags to gravitar images.
 *
 * @param [type] $wfd_gravatar
 * @return $wfd_gravatar
 */
function wfd_gravatar_alt( $wfd_gravatar ) {
	if ( have_comments() ) {
		$alt = get_comment_author();
	} else {
		$alt = get_the_author_meta( 'display_name' );
	}
	$wfd_gravatar = str_replace( 'alt=\'\'', 'alt=\'Avatar for ' . $alt . '\' title=\'Gravatar for ' . $alt . '\'', $wfd_gravatar );
	return $wfd_gravatar;
}
