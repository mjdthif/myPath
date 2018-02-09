<?php
function erwa_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'erwa_resources');

// Navigation menu

register_nav_menus(array(
    'main_menu' => __('Main Menu'),
	'footer'=> __('Footer Menu'),
));

// Get top ancestor


function get_top_ancestor_id() {
    global $post;
    if ($post->post_parent) {
        $ansectors = array_reverse(get_post_ancestors($post->ID));
        return $ansectors[0];
    }

    return $post->ID;
}

// Does page have children?
function has_children() {
    global $post;

    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);

} 
 
