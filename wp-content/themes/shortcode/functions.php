<?php

function my_info_func( $atts ) {
    $a = shortcode_atts( array(
        'display' => 'all',
    ), $atts );
    $display = "invalid display";
    if ( 'all' == $a['display'] ) {
        $display = "John Doe; john@doe.com; (123) 456-7890";
    }
    if ( 'name' == $a['display'] ) {
        $display = "John Doe";
    }
    if ( 'email' == $a['display'] ) {
        $display = "john@doe.com";
    }
    if ( 'phone' == $a['display'] ) {
        $display = "(123) 456-7890";
    }
    ob_start();
    ?> <span class="contact-info" style="color:red"><?php echo $display; ?></span> <?php
    return ob_get_clean();
}
add_shortcode( 'my-info', 'my_info_func' );