<?php 

register_sidebar(array(
    'name' => 'Blog Sidebar',
    'id' => 'blog-sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>'
));




add_filter( 'widget_title', function( $title, $instance, $id_base ){
    if( 'categories' === $id_base )
        add_filter( 'wp_list_categories', 'bootstrap_categories', 11, 2 );

    return $title;
}, 10, 3 );

function bootstrap_categories( $output, $args ){

    // Get all the categories
    $categories = get_categories( $args );

    $output = '';
    $output .= '<ul class="list-group">';
    foreach ( $categories as $category ) {
        $output .= '<li class="list-group-item">';
        $output .= $category->name;
        $output .= '</li>';
    }
    $output .= '</ul>';

    return $output;
}