<?php
function addStyleSheets():void {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'addStyleSheets');
register_nav_menus(
    array(
        'main-menu' => 'primary'
    )
);
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );
?>