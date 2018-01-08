<?php
namespace App;
function modify_read_more_link() {
    return '<a class="wp_more_link" href="' . get_permalink() . '">Keep Reading <i class="fa fa-arrow-right" aria-hidden="true"></i></a>';
}
add_filter( 'the_content_more_link',  __NAMESPACE__ . '\\modify_read_more_link' );
add_image_size( 'post', 1200, 9999 );
