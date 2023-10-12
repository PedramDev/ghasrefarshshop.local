<?php

namespace Codeya;

function add_main_assets( $hook_suffix ) {
    wp_register_style("preview_link_back_css", plugins_url( '/assets/css/preview-link.back.css', CODEYA_PREVIEW_PLUGIN_FILE ) );
}
add_action( 'admin_enqueue_scripts', 'Codeya\add_main_assets', 10, 1 );

function add_main_front_assets( $hook_suffix ) {
   wp_register_style("preview_link_css", plugins_url( '/assets/css/preview-link.front.css', CODEYA_PREVIEW_PLUGIN_FILE ) );
   wp_register_script("preview_link_js", plugins_url( '/assets/js/preview-link.front.js', CODEYA_PREVIEW_PLUGIN_FILE ),['jquery'],true);
}

add_action( 'wp_enqueue_scripts', 'Codeya\add_main_front_assets', 10, 1 );

?>