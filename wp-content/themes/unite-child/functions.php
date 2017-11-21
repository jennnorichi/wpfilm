<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles() {
    $parent_style = 'unite-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('unite-child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), wp_get_theme()->get('Version')
    );
}

/**
 * Add the new Post Type Film
 */
if (!function_exists('film')) {

// Register Custom Post Type
    function film() {

        $labels = array(
            'name' => _x('Films', 'Post Type General Name', 'films'),
            'singular_name' => _x('Film', 'Post Type Singular Name', 'films'),
            'menu_name' => __('Films', 'films'),
            'name_admin_bar' => __('Film', 'films'),
            'archives' => __('Film Archives', 'films'),
            'attributes' => __('Film Attributes', 'films'),
            'parent_item_colon' => __('Parent Film:', 'films'),
            'all_items' => __('All Films', 'films'),
            'add_new_item' => __('Add New Film', 'films'),
            'add_new' => __('Add New', 'films'),
            'new_item' => __('New Film', 'films'),
            'edit_item' => __('Edit Film', 'films'),
            'update_item' => __('Update Film', 'films'),
            'view_item' => __('View Film', 'films'),
            'view_items' => __('View Films', 'films'),
            'search_items' => __('Search Film', 'films'),
            'not_found' => __('Not found', 'films'),
            'not_found_in_trash' => __('Not found in Trash', 'films'),
            'featured_image' => __('Featured Image', 'films'),
            'set_featured_image' => __('Set featured image', 'films'),
            'remove_featured_image' => __('Remove featured image', 'films'),
            'use_featured_image' => __('Use as featured image', 'films'),
            'insert_into_item' => __('Insert into item', 'films'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'films'),
            'items_list' => __('Films list', 'films'),
            'items_list_navigation' => __('Films list navigation', 'films'),
            'filter_items_list' => __('Filter items list', 'films'),
        );
        $args = array(
            'label' => __('Film', 'films'),
            'description' => __('Films', 'films'),
            'labels' => $labels,
            'supports' => array(),
            'taxonomies' => array('category', 'post_tag', 'genre', 'country', 'year', 'actors'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
        );
        register_post_type('films', $args);
    }

    add_action('init', 'film', 0);
}


/**
 * Add new Taxonomy : Genre, Country, Year and Actors
 */
if (!function_exists('genre')) {

    function genre() {

        $labels = array(
            'name' => _x('Genre', 'Taxonomy General Name', 'genre'),
            'singular_name' => _x('Genre', 'Taxonomy Singular Name', 'genre'),
            'menu_name' => __('Genre', 'genre'),
            'all_items' => __('All Genre', 'genre'),
            'parent_item' => __('Parent Item', 'genre'),
            'parent_item_colon' => __('Parent Item:', 'genre'),
            'new_item_name' => __('New Item Name', 'genre'),
            'add_new_item' => __('Add New Item', 'genre'),
            'edit_item' => __('Edit Item', 'genre'),
            'update_item' => __('Update Item', 'genre'),
            'view_item' => __('View Item', 'genre'),
            'separate_items_with_commas' => __('Separate items with commas', 'genre'),
            'add_or_remove_items' => __('Add or remove items', 'genre'),
            'choose_from_most_used' => __('Choose from the most used', 'genre'),
            'popular_items' => __('Popular Items', 'genre'),
            'search_items' => __('Search Items', 'genre'),
            'not_found' => __('Not Found', 'genre'),
            'no_terms' => __('No items', 'genre'),
            'items_list' => __('Items list', 'genre'),
            'items_list_navigation' => __('Items list navigation', 'genre'),
        );
        $args = array(
            'labels' => $labels,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
        );
        register_taxonomy('genre', array('films'), $args);
    }

    add_action('init', 'genre', 0);
}


if (!function_exists('country')) {

    function country() {

        $labels = array(
            'name' => _x('Country', 'Taxonomy General Name', 'country'),
            'singular_name' => _x('Country', 'Taxonomy Singular Name', 'country'),
            'menu_name' => __('Country', 'country'),
            'all_items' => __('All Country', 'country'),
            'parent_item' => __('Parent Item', 'country'),
            'parent_item_colon' => __('Parent Item:', 'country'),
            'new_item_name' => __('New Item Name', 'country'),
            'add_new_item' => __('Add New Item', 'country'),
            'edit_item' => __('Edit Item', 'country'),
            'update_item' => __('Update Item', 'country'),
            'view_item' => __('View Item', 'country'),
            'separate_items_with_commas' => __('Separate items with commas', 'country'),
            'add_or_remove_items' => __('Add or remove items', 'country'),
            'choose_from_most_used' => __('Choose from the most used', 'country'),
            'popular_items' => __('Popular Items', 'country'),
            'search_items' => __('Search Items', 'country'),
            'not_found' => __('Not Found', 'country'),
            'no_terms' => __('No items', 'country'),
            'items_list' => __('Items list', 'country'),
            'items_list_navigation' => __('Items list navigation', 'country'),
        );
        $args = array(
            'labels' => $labels,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
        );
        register_taxonomy('country', array('films'), $args);
    }

    add_action('init', 'country', 0);
}


if (!function_exists('year')) {

    function year() {

        $labels = array(
            'name' => _x('Year', 'Taxonomy General Name', 'year'),
            'singular_name' => _x('Year', 'Taxonomy Singular Name', 'year'),
            'menu_name' => __('Year', 'year'),
            'all_items' => __('All Years', 'year'),
            'parent_item' => __('Parent Item', 'year'),
            'parent_item_colon' => __('Parent Item:', 'year'),
            'new_item_name' => __('New Item Name', 'year'),
            'add_new_item' => __('Add New Item', 'year'),
            'edit_item' => __('Edit Item', 'year'),
            'update_item' => __('Update Item', 'year'),
            'view_item' => __('View Item', 'year'),
            'separate_items_with_commas' => __('Separate items with commas', 'year'),
            'add_or_remove_items' => __('Add or remove items', 'year'),
            'choose_from_most_used' => __('Choose from the most used', 'year'),
            'popular_items' => __('Popular Items', 'year'),
            'search_items' => __('Search Items', 'year'),
            'not_found' => __('Not Found', 'year'),
            'no_terms' => __('No items', 'year'),
            'items_list' => __('Items list', 'year'),
            'items_list_navigation' => __('Items list navigation', 'year'),
        );
        $args = array(
            'labels' => $labels,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
        );
        register_taxonomy('year', array('films'), $args);
    }

    add_action('init', 'year', 0);
}


if (!function_exists('actors')) {

    function actors() {

        $labels = array(
            'name' => _x('Actors', 'Taxonomy General Name', 'actors'),
            'singular_name' => _x('Actor', 'Taxonomy Singular Name', 'actors'),
            'menu_name' => __('Actor', 'actors'),
            'all_items' => __('All Actors', 'actors'),
            'parent_item' => __('Parent Item', 'actors'),
            'parent_item_colon' => __('Parent Item:', 'actors'),
            'new_item_name' => __('New Item Name', 'actors'),
            'add_new_item' => __('Add New Item', 'actors'),
            'edit_item' => __('Edit Item', 'actors'),
            'update_item' => __('Update Item', 'actors'),
            'view_item' => __('View Item', 'actors'),
            'separate_items_with_commas' => __('Separate items with commas', 'actors'),
            'add_or_remove_items' => __('Add or remove items', 'actors'),
            'choose_from_most_used' => __('Choose from the most used', 'actors'),
            'popular_items' => __('Popular Items', 'actors'),
            'search_items' => __('Search Items', 'actors'),
            'not_found' => __('Not Found', 'actors'),
            'no_terms' => __('No items', 'actors'),
            'items_list' => __('Items list', 'actors'),
            'items_list_navigation' => __('Items list navigation', 'actors'),
        );
        $args = array(
            'labels' => $labels,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
        );
        register_taxonomy('actors', array('films'), $args);
    }

    add_action('init', 'actors', 0);
}

/**
 * 
 * @global type $post
 * @param type $content
 * @return type
 * 
 * Display taxonomy inside the list view below the content
 */
function theme_slug_filter_the_content($content) {

    global $post;
    $a = $content;
    if (!is_single()) {
        ob_start();
        echo $content;
        $taxonomies = [
            "genre" => "Genre",
            "country" => "Country",
            "year" => "Year",
            "actors" => "Actor",
        ];
        ?>


        <ul>
            <?php
            $args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all');

            foreach ($taxonomies as $taxonomy => $taxTitle) {
                ?> 
                <li><b><?php echo $taxTitle; ?>: </b>
                    <?php
                    $terms = wp_get_post_terms($post->ID, $taxonomy, $args);
                    $singleTerms = "";
                    foreach ($terms as $term_single) {
                        $singleTerms .= $term_single->slug . ","; //do something here
                    }
                    echo " " . trim($singleTerms, ",");
                    ?>
                </li>
                <?php
            }
            ?>
        </ul>
        <?php
        $a = ob_get_clean();
    }
    return $a;
}

add_filter('the_content', 'theme_slug_filter_the_content');

function latest_films($atts) {
    $args = array(
        'numberposts' => 5,
        'offset' => 0,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'films',
        'post_status' => 'publish',
        'suppress_filters' => true
    );
    $recent_posts = wp_get_recent_posts($args);
    ob_start();
    echo "<ul>";
    foreach ($recent_posts as $recent) {
        echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a> </li> ';
    }
    wp_reset_query();
    echo "</ul>";
    $a = ob_get_clean();
    return $a;
}

add_shortcode('latest_films', 'latest_films');
