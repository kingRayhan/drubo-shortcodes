<?php
/*
 * Drubo Our Service
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 * ======================================================
 */
//[drubo_slider slider_id=""]



/**
 * =======================================================
 *    KC Shortcode Map
 * =======================================================
 */
if(DRUBO_SLIDER_PLUGIN_ACTIVATED):
	add_action('init', 'drubo_slider_kc_map'); // Call kc_add_map function ///
	function drubo_slider_kc_map(){
		
			$slider_list = array();
			$args = array(
			    'post_type' => array( 'drubo_slider' ),
			);
			$query = new WP_Query( $args );
			while ( $query->have_posts() ) : $query->the_post();
			    $slider_list[get_the_id()] = get_the_title();
			endwhile; 


		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_slider' => array( // <-- shortcode tag name

		            'name' => __('Drubo Slider', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(

		         	'General' => array(

						// ----------------------------------------------------------------------
						// Select
						// ----------------------------------------------------------------------
						array(
							'label'       => __('Select Slider', DRUBO_SHORTCODE_TEXT_DOMAIN), 
							'admin_label' => TRUE,
							'name'        => 'slider_id',
							'type'        => 'select',
							'options' => $slider_list
						),

		         	), // content

		        // .............................................
		        // .............................................
		        // .............................................

		        /////////////////////////////////////////////////////////
		            )// Params

		        )// end shortcode key
		    )// first array
		); // End add map
		endif;
	}
endif;