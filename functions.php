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

add_shortcode('subfooter', 'david_subfooter');

function david_subfooter(){
    echo '
        <div class="subfooter row">
            <div class="col-12 text-right px-5 text-muted">
                <p><strong>'. get_bloginfo() .'</strong> © '. date("Y") .' | Online portfolio</p>
            </div>
        </div>
    ';
}