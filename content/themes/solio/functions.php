<?php

add_theme_support( 'post-thumbnails' );

add_image_size( 'portfolio-image', 300, 200, true );

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
register_nav_menus(
array(
'main-menu' => __( 'Main Menu' ))
);
}

register_taxonomy('portfolio-categories', 'post', array(
'hierarchical' => false,  'label' => 'Portfolio Categories',
'query_var' => true, 'rewrite' => true));

//Register More Settings
function g_options() {
	add_menu_page('Theme Settings', 'Theme Settings', 'edit_themes', 'theme_settings.php', 'g_theme_settings');
}
add_action('admin_menu', 'g_options');

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

// Create Portfolio Custom Post Type
function post_type_portfolio() {
	register_post_type( 'portfolio',
                array('label' => __('Portfolio'),
                             'public' => true,
                             'show_ui' => true,
                             'taxonomies' => array( 'portfolio-categories'),
                             'supports' => array(
                             			'title',
                                        'thumbnail',
                                        'editor',
                                        'excerpt',
                                        'revisions')
                                )
                      );
	register_taxonomy_for_object_type('post_tag', 'portfolio');
}
add_action('init', 'post_type_portfolio');

// Register Shortcodes
require_once(TEMPLATEPATH . '/theme_settings.php');


?>