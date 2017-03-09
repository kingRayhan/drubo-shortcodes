<?php
/*
 * Drubo Brand Slider
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 * ======================================================
 */


/**
 * =======================================================
 *    KC Shortcode Map
 * =======================================================
 */

add_action('init', 'drubo_brand_slider_map'); // Call kc_add_map function ///

if(!function_exists('drubo_brand_slider_map')):
	function drubo_brand_slider_map(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_brand_slider' => array( // <-- shortcode tag name

		            'name' => __('Brand Slider', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Drubo Brand Slider', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(

		     			'general' => array(
								array(
									'type'			=> 'group',
									'label'			=> __('Slides', DRUBO_SHORTCODE_TEXT_DOMAIN),
									'name'			=> 'slide',
									'options'		=> array('add_text' => __('Add new slide', DRUBO_SHORTCODE_TEXT_DOMAIN)),
									'params' => array(
										array(
											'type' => 'text',
											'label' => __( 'Slide target URL', DRUBO_SHORTCODE_TEXT_DOMAIN ),
											'name' => 'url',
										),
										array(
											'type' => 'attach_image',
											'label' => __( 'Slide image', DRUBO_SHORTCODE_TEXT_DOMAIN ),
											'name' => 'image',
										),

									),
								), // group array
							),// general
		                    'styling' => array(
		                    	array(
		                    		'name' => 'custom_css',
		                    		'type' => 'css',
		                    		'options' => array(
		                    			array(
		                    				'Slide style'   => array(
		                    					array(
		                    						'property' => 'border-color', 
		                    						'label' => 'Slide Hover border color', 
		                    						'selector' => '+ .brand-single > a:hover',
		                    						'value' => '#14b1bb'
		                    					),
		                    					array(
		                    						'property' => 'background-color', 
		                    						'label' => 'Slide Background Color', 
		                    						'selector' => '+ .brand-single > a',
		                    					),

		                    				),
		                    			)
		                    		) //End of options
		                    	)
		                    ), //End of styling
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




/**
 * =======================================================
 *    Register Shortcode
 * =======================================================
 */

function drubo_brand_slider_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'slide' => '',
            // css
                'custom_css' => '',
                'custom_css_class' => '',
        ),$atts); 
        extract($drubo_shortcode_atts);

    //custom class		
	$wrap_class  = apply_filters( 'kc-el-class', $atts );
	if( !empty( $custom_class ) ):
	 	$wrap_class[] = $custom_class;
    endif;
	$extra_class =  implode( ' ', $wrap_class );	
?>
<div class="<?php echo $extra_class; ?> <?php echo $custom_css_class; ?>">


	<div class="brand-carsoul">

<?php foreach ($slide as $key => $value) { ?>
		<!-- Brand Single -->
		<div class="col-md-12">
			<div class="brand-single">
				<a href="<?php echo empty($value->url) ? '#' : $value->url; ?>">
			<img src="<?php 
			$image_size = apply_filters('','large');
			$img_src = wp_get_attachment_image_src($value->image , $image_size)[0]; 
			echo $img_src;

			?>" alt="" /></a>
			</div>
		</div>
		<!-- Brand Single -->
<?php } ?>



	</div>

</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_brand_slider','drubo_brand_slider_func');