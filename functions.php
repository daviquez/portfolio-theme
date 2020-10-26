<?php

define('ROOT', get_template_directory_uri() );

include_once 'lib/theme-support.php';
include_once 'lib/navigation.php';
include_once 'lib/enqueue.php';

add_filter('upload_mimes', 'david_mime_types', 1, 1);
function david_mime_types( $mime_types ) {
    $mime_types['svg'] = 'image/svg+xml';
    $mime_types['svgz'] = 'image/svg+xml';
    
    return $mime_types;
}