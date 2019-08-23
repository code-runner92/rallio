<?php

function remove_from_menu() {
  remove_menu_page('edit-comments.php');
}
add_action( 'admin_menu', 'remove_from_menu' );

add_action('after_setup_theme', 'custom_remove_admin_bar');
function custom_remove_admin_bar() {
  if (is_user_logged_in()) {
    show_admin_bar(false);
  }
}
// add_action( 'init', '_unregister_taxonomy' );
function _unregister_taxonomy() {
  global $wp_taxonomies;
  $taxonomy = 'category';
  if ( taxonomy_exists($taxonomy) )
    unset( $wp_taxonomies[$taxonomy] );
}
add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

remove_action('wp_head', 'wp_generator');

add_action( 'init', 'register_nav' );
function register_nav() {
  register_nav_menus(
    array( 
      'main_menu' => __( 'Main menu' ),
      'footer_menu' => __( 'Footer menu' ),
    )
  );
}

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Options',
    'menu_title'  => 'Options',
    'menu_slug'   => 'footer',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

add_theme_support( 'post-thumbnails', array( 'post', 'page') );

function custom_image_size() {
  update_option('image_default_align', 'center' );
  update_option('image_default_size', 'full' );

}
add_action('after_setup_theme', 'custom_image_size');

function add_custom_sizes() {
 add_image_size( 'full_hd', 1920, 1080, true ); 
 add_image_size( 'hero', 1640, 800, true ); 
 add_image_size( 'single', 664, 350, true ); 
 add_image_size( 'news', 800, 295, true ); 
 add_image_size( 'category', 768, 550, true ); 
}
add_action('after_setup_theme','add_custom_sizes');


add_action( 'admin_head', 'hide_editor' );
function hide_editor() {
  $template_file = basename( get_page_template() );
  if($template_file == 'page-about.php'){
    remove_post_type_support('page', 'editor');
  }
  if($template_file == 'page-privacy.php'){
    remove_post_type_support('page', 'editor');
  }
  if($template_file == 'page-case-studies.php'){
    remove_post_type_support('page', 'editor');
  }
  if($template_file == 'page-local.php'){
    remove_post_type_support('page', 'editor');
  }
  if($template_file == 'page-tech.php'){
    remove_post_type_support('page', 'editor');
  }
  if((int) get_option('page_on_front')==get_the_ID())
  {
      remove_post_type_support('page', 'editor');
  }
}


add_filter('wpseo_metabox_prio', function($prio) {
  return 'low';
}, 10, 1);


function add_async_forscript($url) {
  if (strpos($url, '#asyncload')===false)
    return $url;
  else if (is_admin())
    return str_replace('#asyncload', '', $url);
  else
    return str_replace('#asyncload', '', $url)."' async defer"; 
}
add_filter('clean_url', 'add_async_forscript', 11, 1);

function letsdayout_enqueue_script() {
  // wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
  wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/dist/js/libs/swiper.min.js', array( ), '4.5.0' , true );
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/dist/js/main.js#asyncload', array( 'swiper' ), '20190720' , true );

  wp_localize_script( 'main', 'settings', array(
      'ajaxurl'    => admin_url( 'admin-ajax.php' )
  ) );

}
add_action( 'wp_enqueue_scripts', 'letsdayout_enqueue_script' );

function remove_head_scripts() {
remove_action('wp_head', 'wp_print_scripts');
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_enqueue_scripts', 1);

add_action('wp_footer', 'wp_print_scripts', 5);
add_action('wp_footer', 'wp_enqueue_scripts', 1);
add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

add_action('acf/input/admin_head', 'my_acf_admin_head');

function my_acf_admin_head() {
    
    ?>
    <script type="text/javascript">
    (function($) {
        
        $(document).ready(function(){
            
            if ($('.acf-field-5c8f523913ffa').length) {
              $('.acf-field-5c8f523913ffa .acf-input').append( $('#postdivrich') );
              $('.acf-field-5c8f530a7d3c7 .acf-input').append( $('#postexcerpt') );
            }
            
            
        });
        
    })(jQuery);    
    </script>
    <style type="text/css">
        .acf-field #wp-content-editor-tools {
            background: transparent;
            padding-top: 0;
        }
    </style>
    <?php    
    
}


/*-------------------------------------------------------------------------------
  Custom Columns
-------------------------------------------------------------------------------*/

function my_manage_columns( $columns ) {
  unset($columns['tags']);
  unset($columns['comments']);
  return $columns;
}

function my_column_init() {
  add_filter( 'manage_posts_columns' , 'my_manage_columns' );
}
add_action( 'admin_init' , 'my_column_init' );

function my_page_columns($columns) {
  $columns['category'] = 'Category';
  return $columns;
}

function my_custom_columns($column) {
  global $post;
  if($column == 'category') {
    echo get_field('category', $post->ID);
  }

}

add_action("manage_posts_custom_column", "my_custom_columns");
add_filter("manage_edit-post_columns", "my_page_columns");


/**
 * Make Media attachments translatable with WPML
 *
 * Filter ACF images and galleries to switch attachment ids with their
 * corresponding WPML translation.
 */
add_filter( 'acf/load_value/type=gallery', 'my_acf_load_translated_attachment', 10, 3 );
add_filter( 'acf/load_value/type=image', 'my_acf_load_translated_attachment', 10, 3 );
 
function my_acf_load_translated_attachment($value, $post_id, $field) {
    $newValue = $value;
 
    // Make sure we are using WPML
    if ( function_exists('icl_object_id') ) {
        // Galleries come in arrays
        if ( is_array($value) ) {
            $newValue = array();
            foreach ($value as $key => $id) {
                $newValue[$key] = icl_object_id($id, 'attachment');
            }
        }
        // Single images arrive as simple values
        else {
            $newValue = icl_object_id($value, 'attachment');
        }
    }
 
    return $newValue;
}

function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


function wpse_edit_post_show_excerpt( $user_login, $user ) {
    $unchecked = get_user_meta( $user->ID, 'metaboxhidden_post', true );
    $key = array_search( 'postexcerpt', $unchecked );
    if ( FALSE !== $key ) {
        array_splice( $unchecked, $key, 1 );
        update_user_meta( $user->ID, 'metaboxhidden_post', $unchecked );
    }
}
add_action( 'wp_login', 'wpse_edit_post_show_excerpt', 10, 2 );

// 
// LAYOUT FOR CASE STUDIES
// 

/*
* Define a constant path to our single template folder
*/
define('SINGLE_PATH', TEMPLATEPATH);
 
/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');
 
/**
* Single template function which will choose our template
*/
function my_single_template($single) {
global $wp_query, $post;
 
/**
* Checks for single template by category
* Check by category slug and ID
*/
foreach((array)get_the_category() as $cat) :
 
if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
 
elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';

else {
  return SINGLE_PATH . '/single.php';
}
 
endforeach;
}

// 
// BLOG QUERY MODIFICATION
// 
// My function to modify the main query object
function my_modify_main_query( $query ) {
if ( is_home() && $query->is_main_query() ) { 
$query->query_vars['cat'] = -10; // Exclude case studies
}
}
// Hook my above function to the pre_get_posts action
add_action( 'pre_get_posts', 'my_modify_main_query' );