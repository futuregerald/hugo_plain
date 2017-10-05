<?php
define('THEME_URL', get_template_directory_uri());

/*Post thumbnails
--------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );
add_image_size( "960_", 960, 9999, false );
add_image_size( "960x400", 960, 400, true );
add_image_size( "960x350", 960, 350, true );

?>