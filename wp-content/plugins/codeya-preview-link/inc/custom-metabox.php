<?php

/** Single Post */
function codeya_preview_link_metabox() {
  wp_enqueue_style('preview_link_back_css');

	$prefix = 'codeya_preview_link_';

    $cmb_post_box = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        =>  'پیش نمایش :',
		'object_types' => array( 'product' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
    ) );

    $cmb_post_box->add_field( array(
        'name' => 'آدرس پیش نمایش :',
        'id'   =>  $prefix .'url',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ) );

}
add_action( 'cmb2_admin_init', 'codeya_preview_link_metabox' );




add_action( 'woocommerce_after_add_to_cart_form', 'codeya_show_preview_link_after_add_to_cart_form_action' );

/**
 * Function for `woocommerce_after_add_to_cart_form` action-hook.
 * 
 * @return void
 */
function codeya_show_preview_link_after_add_to_cart_form_action(){
  if ( is_product() ) {
    $preview_data = get_post_meta(get_the_ID() , 'codeya_preview_link_url', true);
    if(isset($preview_data) && !empty($preview_data)){
      wp_enqueue_style('preview_link_css');
      wp_enqueue_script('preview_link_js');
      echo "<a href='$preview_data' class='decor-preview single_add_to_cart_button button'>پیش نمایش</a>";
    }
  }
}