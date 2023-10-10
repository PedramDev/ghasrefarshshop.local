<?php

namespace PED_SEARCH_FORM;

function plugin_assets(){
    wp_enqueue_style("search_form_table_bootstrap_css", plugins_url( '/assets/lib/bootstrap/bootstrap.min.css', PED_SEARCH_FORM_PLUGIN_FILE ) );
    wp_enqueue_script("search_form_table_bootstrap_js", plugins_url( '/assets/lib/bootstrap/bootstrap.min.js', PED_SEARCH_FORM_PLUGIN_FILE ),['jquery'],true);

   wp_enqueue_style("search_form_table_bootstrap_table_css", plugins_url( '/assets/lib/bootstrap-table/bootstrap-table.min.css', PED_SEARCH_FORM_PLUGIN_FILE ) );
   wp_enqueue_script("search_form_table_bootstrap_table_js", plugins_url( '/assets/lib/bootstrap-table/bootstrap-table.min.js', PED_SEARCH_FORM_PLUGIN_FILE ),['jquery'],true);
    
    wp_enqueue_style("search_form_table_toastr_css", plugins_url( '/assets/lib/toastr/toastr.min.css', PED_SEARCH_FORM_PLUGIN_FILE ) );
    wp_enqueue_script("search_form_table_toastr_js", plugins_url( '/assets/lib/toastr/toastr.min.js', PED_SEARCH_FORM_PLUGIN_FILE ),['jquery'],true);

   wp_enqueue_script("search_form_table_jquery_validate_js", plugins_url( '/assets/lib/jquery-validation/jquery.validate.min.js', PED_SEARCH_FORM_PLUGIN_FILE ),['jquery'],true);
//
   wp_enqueue_style("search_form_table_bootstrap-icons", plugins_url( '/assets/lib/bootstrap-icon/bootstrap-icons.css', PED_SEARCH_FORM_PLUGIN_FILE ) );
}

function add_main_assets( $hook_suffix ) {
    plugin_assets();
    wp_enqueue_style("search_form_bootstrap-table-customize_css", plugins_url( '/assets/bootstrap-table-customize.css', PED_SEARCH_FORM_PLUGIN_FILE ) );
	wp_enqueue_script("search_form_bootstrap-table-customize", plugins_url( '/assets/bootstrap-table-customize.js', PED_SEARCH_FORM_PLUGIN_FILE ),['jquery'],true);
    wp_enqueue_script("search_form_table_main", plugins_url( '/assets/main.js', PED_SEARCH_FORM_PLUGIN_FILE ),['jquery','search_form_jalali_moment'],true);
	wp_localize_script("search_form_table_main", "wp_ajax_request_ajax", admin_url("admin-ajax.php"));
    wp_enqueue_script("search_form_jalali_moment", plugins_url( '/assets/lib/jalali-moment/jalali-moment@3.3.11.js', PED_SEARCH_FORM_PLUGIN_FILE ),[],true);
}
add_action( 'admin_enqueue_scripts', 'PED_SEARCH_FORM\add_main_assets', 10, 1 );

function add_main_front_assets( $hook_suffix ) {
    plugin_assets();//front-answer
	wp_enqueue_script("search_form_table_main", plugins_url( '/assets/front.js', PED_SEARCH_FORM_PLUGIN_FILE ),['jquery'],true);
    wp_enqueue_style("search_form_table_custom_css", plugins_url( '/assets/custom.css', PED_SEARCH_FORM_PLUGIN_FILE ),true );
	wp_localize_script("search_form_table_main", "front_request_ajax", admin_url("admin-ajax.php"));
}

add_action( 'wp_enqueue_scripts', 'PED_SEARCH_FORM\add_main_front_assets', 10, 1 );

?>