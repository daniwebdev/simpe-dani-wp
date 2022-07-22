<?php
function wp_init()
{
    register_nav_menu('simple-dani-wp-menu', __('Simple Dani WP Menu'));


    add_theme_support('title-tag');

    // Add post thumbnails (featured image) support
    add_theme_support('post-thumbnails');
}

add_action('init', 'wp_init');

function wpb_init_widgets_custom($id)
{

    /* Register sidebar widget */
    register_sidebar(array(
        'name' => 'simpel-dani-wp-sidebar',
        'id'   => 'customsidebar-id',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    /* Register sidebar widget */
    register_sidebar(array(
        'name' => 'sidebar_single_page',
        'id'   => 'sidebar_single_page_id',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'wpb_init_widgets_custom');

function bootstrap_pagination(\WP_Query $wp_query = null, $echo = true, $params = [])
{
    if (null === $wp_query) {
        global $wp_query;
    }

    $add_args = [];

    $pages = paginate_links(
        array_merge([
            'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format'       => '?paged=%#%',
            'current'      => max(1, get_query_var('paged')),
            'total'        => $wp_query->max_num_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => __('« Prev'),
            'next_text'    => __('Next »'),
            'add_args'     => $add_args,
            'add_fragment' => ''
        ], $params)
    );

    if (is_array($pages)) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $pagination = '<div class="pagination"><ul class="pagination">';

        foreach ($pages as $page) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }

        $pagination .= '</ul></div>';

        if ($echo) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}

function setPostViews($postID)
{
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    } else {
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

function get_the_modified()
{
    $u_time = get_the_time('U');
    $custom_content = '';
    $u_modified_time = get_the_modified_time('U');
    if ($u_modified_time >= $u_time + 86400) {
        $updated_date = get_the_modified_time('F jS, Y');
        $updated_time = get_the_modified_time('h:i a');
        $custom_content .= $updated_date . ' at ' . $updated_time;
    }
    
    return $custom_content;
}

function add_id_to_h2($content) {
    // add id attribute with snack case to h2
    $content = preg_replace('/<h2(.*?)>(.*?)<\/h2>/', '<h2$1 id="$2">$2</h2>', $content);

    //get h2 with id as array
    $h2_array = array();
    preg_match_all('/<h2(.*?) id="(.*?)"(.*?)>(.*?)<\/h2>/', $content, $h2_array);

    foreach($h2_array as $key => $value) {
        if($key == 0) {
            continue;
        }
        // to stack case
        foreach($value as $id) {
            $h2_id = strtolower(str_replace(' ', '-', $id));

            $content = str_replace('id="'.$id.'"', "id='$h2_id'", $content);
        }
    }
    return $content;
}
add_filter( 'the_content', 'add_id_to_h2');


