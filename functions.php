<?php
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_theme_support('post-thumbnails');

function wpc_theme_support()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'wpc_theme_support');

add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);

function custom_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
{
  $my_attr = 'client-formation';

  if (isset($atts[$my_attr])) {
    $out[$my_attr] = $atts[$my_attr];
  }
  return $out;
}

function my_acf_init()
{

  acf_update_setting('google_api_key', 'AIzaSyCS7S6U4rLKt2N70vV6NxCRpJ4u_GIohcA');
}
add_action('acf/init', 'my_acf_init');

function create_post_chiens_male()
{
  register_post_type('Chiensmale', [
    'labels'            => [
      'name'          => __('Chiens male'),
      'singular_name' => __('Chiens male'),
      'add_new_item'  => ('Ajouter un nouveau chien male'),
      'edit_item'     => __('Modifier un chien male'),
      'search_item'   => __('Rechercher un chien male'),
      'all_items'     => __('Tout les chiens male'),
      'view_items'    => __('Voir les chiens male'),
      'view_item'     => __('Voir le chien male'),
    ],
    'public'            => true,
    'has_archive'       => true,
    'rewrite'           => ['slug' => 'chiens male'],
    'capability_type'   => 'page',
    'menu_icon'         => 'dashicons-plus',
    'supports'          => ['title', 'thumbnail'],
    'show_in_menu'      => true,
    'show_in_nav_menus' => true,
  ]);
}
add_action('init', 'create_post_chiens_male');

function create_post_chiens_femelle()
{
  register_post_type('Chiensfemelle', [
    'labels'            => [
      'name'          => __('Chiens femelle'),
      'singular_name' => __('Chiens femelle'),
      'add_new_item'  => ('Ajouter un nouveau chien femelle'),
      'edit_item'     => __('Modifier un chien femelle'),
      'search_item'   => __('Rechercher un chien femelle'),
      'all_items'     => __('Tout les chiens femelle'),
      'view_items'    => __('Voir les chiens femelle'),
      'view_item'     => __('Voir le chien femelle'),
    ],
    'public'            => true,
    'has_archive'       => true,
    'rewrite'           => ['slug' => 'chiens femelle'],
    'capability_type'   => 'page',
    'menu_icon'         => 'dashicons-plus',
    'supports'          => ['title', 'thumbnail'],
    'show_in_menu'      => true,
    'show_in_nav_menus' => true,
  ]);
}
add_action('init', 'create_post_chiens_femelle');

function create_post_chiens_bebe()
{
  register_post_type('Bebechiens', [
    'labels'            => [
      'name'          => __('Bebe chiens'),
      'singular_name' => __('Bebe chiens'),
      'add_new_item'  => ('Ajouter un nouveau bebe chiens'),
      'edit_item'     => __('Modifier un bebe chiens'),
      'search_item'   => __('Rechercher un bebe chiens'),
      'all_items'     => __('Tout les bebe chiens'),
      'view_items'    => __('Voir les bebe chiens'),
      'view_item'     => __('Voir le bebe chiens'),
    ],
    'public'            => true,
    'has_archive'       => true,
    'rewrite'           => ['slug' => 'bebe chiens'],
    'capability_type'   => 'page',
    'menu_icon'         => 'dashicons-plus',
    'supports'          => ['title', 'thumbnail'],
    'show_in_menu'      => true,
    'show_in_nav_menus' => true,
  ]);
}
add_action('init', 'create_post_chiens_bebe');

function create_post_chats_male()
{
  register_post_type('Chatsmale', [
    'labels'            => [
      'name'          => __('Chats male'),
      'singular_name' => __('Chats male'),
      'add_new_item'  => ('Ajouter un nouveau chat male'),
      'edit_item'     => __('Modifier un chat male'),
      'search_item'   => __('Rechercher un chat male'),
      'all_items'     => __('Tout les chats male'),
      'view_items'    => __('Voir les chats male'),
      'view_item'     => __('Voir le chat male'),
    ],
    'public'            => true,
    'has_archive'       => true,
    'rewrite'           => ['slug' => 'chats male'],
    'capability_type'   => 'page',
    'menu_icon'         => 'dashicons-plus',
    'supports'          => ['title', 'thumbnail'],
    'show_in_menu'      => true,
    'show_in_nav_menus' => true,
  ]);
}
add_action('init', 'create_post_chats_male');

function create_post_chats_femelle()
{
  register_post_type('Chatsfemelle', [
    'labels'            => [
      'name'          => __('Chats femelle'),
      'singular_name' => __('Chats femelle'),
      'add_new_item'  => ('Ajouter un nouveau chat femelle'),
      'edit_item'     => __('Modifier un chat femelle'),
      'search_item'   => __('Rechercher un chat femelle'),
      'all_items'     => __('Tout les chats femelle'),
      'view_items'    => __('Voir les chats femelle'),
      'view_item'     => __('Voir le chat femelle'),
    ],
    'public'            => true,
    'has_archive'       => true,
    'rewrite'           => ['slug' => 'chats femelle'],
    'capability_type'   => 'page',
    'menu_icon'         => 'dashicons-plus',
    'supports'          => ['title', 'thumbnail'],
    'show_in_menu'      => true,
    'show_in_nav_menus' => true,
  ]);
}
add_action('init', 'create_post_chats_femelle');

function create_post_bebe_chats()
{
  register_post_type('bebechats', [
    'labels'            => [
      'name'          => __('bebe chats'),
      'singular_name' => __('bebe chats'),
      'add_new_item'  => ('Ajouter un nouveau bebe chats'),
      'edit_item'     => __('Modifier un bebe chats'),
      'search_item'   => __('Rechercher un bebe chats'),
      'all_items'     => __('Tout les bebe chats'),
      'view_items'    => __('Voir les bebe chats'),
      'view_item'     => __('Voir le bebe chats'),
    ],
    'public'            => true,
    'has_archive'       => true,
    'rewrite'           => ['slug' => 'bebe chats'],
    'capability_type'   => 'page',
    'menu_icon'         => 'dashicons-plus',
    'supports'          => ['title', 'thumbnail'],
    'show_in_menu'      => true,
    'show_in_nav_menus' => true,
  ]);
}
add_action('init', 'create_post_bebe_chats');

function create_post_block()
{
  register_post_type('block', [
    'labels'            => [
      'name'          => __('Block'),
      'singular_name' => __('Block'),
      'add_new_item'  => ('Ajouter un nouveau block'),
      'edit_item'     => __('Modifier un block'),
      'search_item'   => __('Rechercher un block'),
      'all_items'     => __('Tous les blocks'),
      'view_items'    => __('Voir les blocks'),
      'view_item'     => __('Voir le block'),
    ],
    'capabilities' => array(
      'create_posts' => 'do_not_allow',
    ),
    'map_meta_cap' => true,
    'public'            => true,
    'has_archive'       => true,
    'rewrite'           => ['slug' => 'block'],
    'capability_type'   => 'page',
    'menu_icon'         => 'dashicons-align-right',
    'supports'          => ['title', 'thumbnail'],
    'show_in_menu'      => true,
    'show_in_nav_menus' => false,
  ]);
}
add_action('init', 'create_post_block');

register_nav_menus(array(
  'Top'    => 'Navigation principale',
));

add_filter('get_sample_permalink_html', 'hide_permalinks', 10, 5);

function hide_permalinks($return, $post_id, $new_title, $new_slug, $post)
{
  if ($post->post_type == 'block' || $post->post_type == 'client') {
    return '';
  }
  return $return;
}

function remove_yoast_metabox()
{
  remove_meta_box('wpseo_meta', 'date', 'normal');
  remove_meta_box('wpseo_meta', 'dealer', 'normal');
  remove_meta_box('wpseo_meta', 'team', 'normal');
  remove_meta_box('wpseo_meta', 'staff', 'normal');
  remove_meta_box('wpseo_meta', 'news', 'normal');
  remove_meta_box('wpseo_meta', 'arround', 'normal');
}
add_action('add_meta_boxes', 'remove_yoast_metabox', 11);

// Remove menu
function remove_menus()
{
  if (!current_user_can('administrator')) {
    remove_menu_page('upload.php');
    remove_menu_page('themes.php');
    remove_menu_page('plugins.php');
    remove_menu_page('tools.php');
    remove_menu_page('options-general.php');
    remove_menu_page('wpcf7');
    remove_menu_page('wpcf7');
  }
  remove_menu_page('jetpack');
  remove_menu_page('edit.php');
  remove_menu_page('edit-comments.php');
  remove_menu_page('acf-options');
}
add_action('admin_menu', 'remove_menus', 99);

// Remove bar links
function remove_admin_bar_links()
{

  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('about');
  $wp_admin_bar->remove_menu('wporg');
  $wp_admin_bar->remove_menu('documentation');
  $wp_admin_bar->remove_menu('support-forums');
  $wp_admin_bar->remove_menu('feedback');
  $wp_admin_bar->remove_menu('view-site');
  $wp_admin_bar->remove_menu('updates');
  $wp_admin_bar->remove_menu('comments');
  $wp_admin_bar->remove_menu('new-content');
  $wp_admin_bar->remove_menu('w3tc');

}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_links');

// Remove version
function my_footer_shh()
{
  if (!current_user_can('administrator')) {
    remove_filter('update_footer', 'core_update_footer');
  }
}
add_action('admin_menu', 'my_footer_shh');

// Remove Screen options
function remove_screen_options($display_boolean, $wp_screen_object)
{
  if (!current_user_can('administrator')) {
    $blacklist = array('post.php', 'post-new.php', 'index.php', 'edit.php', 'profile.php');
    if (in_array($GLOBALS['pagenow'], $blacklist)) {
      $wp_screen_object->render_screen_layout();
      $wp_screen_object->render_per_page_options();
      return false;
    }
    return true;
  }
}
add_filter('screen_options_show_screen', 'remove_screen_options', 10, 2 );

// Remove help option
function remove_help_tabs($old_help, $screen_id, $screen)
{
  $screen->remove_help_tabs();
  return $old_help;
}
add_filter('contextual_help', 'remove_help_tabs', 999, 3);