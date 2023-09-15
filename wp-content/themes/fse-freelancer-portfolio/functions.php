<?php
/**
 * FSE Freelancer Portfolio functions and definitions
 *
 * @package fse_freelancer_portfolio
 * @since 1.0
 */

if ( ! function_exists( 'fse_freelancer_portfolio_support' ) ) :
	function fse_freelancer_portfolio_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
endif;

add_action( 'after_setup_theme', 'fse_freelancer_portfolio_support' );

if ( ! function_exists( 'fse_freelancer_portfolio_styles' ) ) :
	function fse_freelancer_portfolio_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'fse-freelancer-portfolio-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_freelancer_portfolio_styles' );

/* Theme Credit link */
define('FSE_FREELANCER_PORTFOLIO_BUY_NOW',__('https://www.cretathemes.com/gutenberg/portfolio-wordpress-theme/','fse-freelancer-portfolio'));
define('FSE_FREELANCER_PORTFOLIO_PRO_DEMO',__('https://www.cretathemes.com/preview/fse-freelancer-portfolio/','fse-freelancer-portfolio'));
define('FSE_FREELANCER_PORTFOLIO_THEME_DOC',__('https://www.cretathemes.com/pro-guide/fse-freelancer-portfolio-pro/','fse-freelancer-portfolio'));
define('FSE_FREELANCER_PORTFOLIO_SUPPORT',__('https://wordpress.org/support/theme/fse-freelancer-portfolio/','fse-freelancer-portfolio'));
define('FSE_FREELANCER_PORTFOLIO_REVIEW',__('https://wordpress.org/support/theme/fse-freelancer-portfolio/reviews/#new-post','fse-freelancer-portfolio'));

//redirect
Function fse_freelancer_portfolio_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
   		wp_safe_redirect( admin_url("themes.php?page=fse-freelancer-portfolio-guide-page") );
   	}
}
add_action('after_setup_theme', 'fse_freelancer_portfolio_notice');

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';