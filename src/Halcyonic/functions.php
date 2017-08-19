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

function register_my_menus() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
  register_nav_menu('big-button',__( 'Big Button' ));
}

function register_featured_post_type()
{
    register_post_type('featured_post',
                       [
                           'labels'      => [
                               'name'          => __('Featured Posts'),
                               'singular_name' => __('Featured Post'),
                           ],
                           'public'      => true,
                           'menu_position' => 20,
                           'supports' => array( 'title', 'editor', 'custom-fields' )
                       ]
    );
}

function featured_post_urls(){
  global $post;
  $custom = get_post_custom($post->ID);
  $image_url = $custom["image_url"][0];
  $link_url = $custom["link_url"][0];
  ?>
  <label>Image URL:</label>
  <input name="image_url" value="<?php echo $image_url; ?>" />
  <label>Link URL:</label>
  <input name="link_url" value="<?php echo $link_url; ?>" />
  <?php
}

function featured_post_placement(){
  global $post;
  $custom = get_post_custom($post->ID);
  $featured_post_location = $custom["featured_post_location"][0];
  $featured_post_position = $custom["featured_post_position"][0];
  ?>
  <label>Post Location</label>
  <select name="featured_post_location">
    <option value="features" <?= ($featured_post_location == 'features' ? 'selected' :'')?>>Features</option>
    <option value="content" <?= ($featured_post_location == 'content' ? 'selected' :'')?>>Content</option>
  </select>
  <br/>
  <label>Position:</label>
  <input name="featured_post_position" value="<?php echo $featured_post_position; ?>" />
  <?php
}
 
function save_details(){
  global $post;
 
  update_post_meta($post->ID, "image_url", $_POST["image_url"]);
  update_post_meta($post->ID, "link_url", $_POST["link_url"]);
  update_post_meta($post->ID, "featured_post_location", $_POST["featured_post_location"]);
  update_post_meta($post->ID, "featured_post_position", $_POST["featured_post_position"]);
}

function admin_init(){
  add_meta_box("Featured Post URLs", "Featured Post URLs", "featured_post_urls", "featured_post", "side", "low");
  add_meta_box("Featured Post Placement", "Placement", "featured_post_placement", "featured_post", "side", "low");
}


add_action('init', 'register_featured_post_type');
add_action('init', 'register_my_menus');
add_action("admin_init", "admin_init");
add_action('save_post', 'save_details');

?>