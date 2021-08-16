<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
    wp_register_style('slick-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', [], false);
    wp_register_style('slick-theme-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', [], false);

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
    wp_enqueue_style('slick-css');
    wp_enqueue_style('slick-theme-css');
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

function my_custom_scripts() {
    wp_register_script('slick-js','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js', array( 'jquery' ), null, true );
    wp_enqueue_script('slick-js');

    wp_enqueue_script( 'slider-js', get_stylesheet_directory_uri() . '/js/slider.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/global.js', null,'',true );

}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
