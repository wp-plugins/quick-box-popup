<?php

$page_option=get_option('xyz_qbx_page_option');
if($page_option==3)
{

add_shortcode( 'xyz_qbx_default_code', 'qbx_lightbox_display' );
}

?>