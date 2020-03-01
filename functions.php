<?php
/**
 * Theme Setup Functions
 */
require get_template_directory() . '/_functions/theme-setup.php';

/**
 * Widget Setup Functions
 */
require get_template_directory() . '/_functions/widget-setup.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/_functions/scripts-setup.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*======================================
=            MOOSE INCLUDES            =
======================================*/

/**
 * Bootstrap 4 Nav Walker
 */
require get_template_directory() . '/_functions/bootstrap-navwalker.php';
require get_template_directory() . '/_functions/moose-navwalker.php';
/**
 * Helper Functions
 */
require get_template_directory() . '/_functions/helpers-setup.php';

/**
 *
 * React App Setup
 *
 */
require get_template_directory() . '/_functions/react-setup.php';

/**
 *
 * Adding Breadcrums
 *
 */

require get_template_directory() . '/_functions/breadcrum-function.php';

/**
 *
 * CUSTOMIZING THE LOGIN SCREEN
 *
 */

require get_template_directory() . '/_functions/wp-logon-screen.php';

/**
 *
 * Changing Comments Headline (Leave a Reply to Leave a comment)
 *
 */

//change text to leave a reply on comment form
function freeman_comment_reform ($arg) {
$arg['title_reply'] = __('Leave a Reply');
return $arg;
}
add_filter('comment_form_defaults','freeman_comment_reform');



/**
 * Remove Archive Name from Archive Title
 * Moose is Loose
 */
	// add_filter( 'get_the_archive_title', function ($title) {    
	// 	if ( is_tax('taxonomy-name', 'courses') ) {    
	// 			$title = single_cat_title( '', false );    
	// 	} elseif ( is_tag() ) {    
	// 			$title = single_tag_title( '', false );    
	// 	} elseif ( is_author() ) {    
	// 			$title = '<span class="vcard">' . get_the_author() . '</span>' ;    
	// 	} elseif ( is_tax() ) { //for custom post types
	// 			$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
	// 	}    
	// 	return $title;    
	// });