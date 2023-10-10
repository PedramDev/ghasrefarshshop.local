<?php

/** Single Post */
function redboa_register_post_banner_metabox() {
	$prefix = 'redboa_post_';

    $cmb_post_box = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'تنظیمات نوشته', REDBOA_SLUG),
		'object_types' => array( 'post' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
    ) );


	$cmb_post_box->add_field(array(
		'name' => esc_html__( 'عکس بنر پس زمینه عنوان', REDBOA_SLUG ),
		'desc' => esc_html__( '', REDBOA_SLUG ),
		'id'   => $prefix . 'banner',
		'type'    => 'file',
        'options' => array(
        'media_buttons' => true,
    ),
    'text'    => array(
        'add_upload_file_text' => 'افزودن عکس' // Change upload button text. Default: "Add or Upload File"
    ),
    // query_args are passed to wp.media's library query.
    'query_args' => array(
        // Or only allow gif, jpg, or png images
        'type' => array(
            'image/jpeg',
            'image/png',
         ),
    ) ));

    $cmb_post_box->add_field( array(
        'name'       => __( 'زیرعنوان', REDBOA_SLUG ),
        'desc'       => __( '',REDBOA_SLUG ),
        'id'         => $prefix.'subtitle',
        'type'       => 'text',
        'show_names'    => true
	) );


    
    $cmb_post_box->add_field( array(
        'name'       => __( 'عنوان اضافی سفید', REDBOA_SLUG ),
        'desc'       => __( '',REDBOA_SLUG ),
        'id'         => $prefix.'extra_white_title',
        'type'       => 'text',
        'show_names'    => true
	) );
    $cmb_post_box->add_field( array(
        'name'       => __( 'عنوان اضافی قرمز', REDBOA_SLUG ),
        'desc'       => __( '',REDBOA_SLUG ),
        'id'         => $prefix.'extra_red_title',
        'type'       => 'text',
        'show_names'    => true
	) );
}
add_action( 'cmb2_admin_init', 'redboa_register_post_banner_metabox' );



/** Single Post */
function redboa_register_menu_metabox() {
	$prefix = 'redboa_menu_';

    $cmb_post_box = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'تنظیمات منو غذا', REDBOA_SLUG),
		'object_types' => array( 'redboa_menu' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
    ) );

    
    $cmb_post_box->add_field( array(
        'name'       => __( 'قیمت', REDBOA_SLUG ),
        'desc'       => __( '',REDBOA_SLUG ),
        'id'         => $prefix.'price',
        'type'       => 'text',
        'show_names'    => true
	) );

    
    $cmb_post_box->add_field( array(
        'name'       => __( 'متن سفید', REDBOA_SLUG ),
        'desc'       => __( '',REDBOA_SLUG ),
        'id'         => $prefix.'white_text',
        'type'       => 'text',
        'show_names'    => true
	) );
}
add_action( 'cmb2_admin_init', 'redboa_register_menu_metabox' );





 /** 
  * Hook in and add a metabox to add fields to taxonomy terms 
  */ 
 function menu_register_taxonomy_metabox() {
 	$prefix = 'menu_term_'; 
  
 	/** 
 	 * Metabox to add fields to categories and tags 
 	 */ 
 	$cmb_term = new_cmb2_box( array( 
 		'id'               => $prefix . 'edit', 
 		'title'            => 'عکس یا آیکون', // Doesn't output for term boxes 
 		'object_types'     => array( 'term' ), // Tells CMB2 to use term_meta vs post_meta 
 		'taxonomies'       => array( 'redboa_menu' ), // Tells CMB2 which taxonomies should have these fields 
 		// 'new_term_section' => true, // Will display in the "Add New Category" section 
 	) ); 
     $cmb_term->add_field(array(
		'name' => esc_html__( 'عکس یا آیکون دسته منو', REDBOA_SLUG ),
		'desc' => esc_html__( '', REDBOA_SLUG ),
		'id'   => $prefix . 'image',
		'type'    => 'file',
        'options' => array(
        'media_buttons' => true,
    ),
    'text'    => array(
        'add_upload_file_text' => 'افزودن عکس' // Change upload button text. Default: "Add or Upload File"
    ),
    // query_args are passed to wp.media's library query.
    'query_args' => array(
        // Or only allow gif, jpg, or png images
        'type' => array(
            'image/jpeg',
            'image/png',
            'image/svg+xml',
         ),
    ) ));
  
 } 
 add_action( 'cmb2_admin_init', 'menu_register_taxonomy_metabox' ); 
