<?php
/**
 * Main Functions File - used for:
 * • including other function-files
 * • WP-Support & WP-Setup
 * • general functions like replacements, translations
 *
 * @author      Flurin Dürst
 * @version     1.3
 * @since       WPSeed 0.1
 *
 */

function register_my_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
}

add_action( 'init', 'register_my_menu' );

?>