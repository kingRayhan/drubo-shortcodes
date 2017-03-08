<?php
/*
 * Drubo Our Service
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

add_action('init', 'drubo_ourservice_map'); // Call kc_add_map function ///

if(!function_exists('drubo_ourservice_map')):
	function drubo_ourservice_map(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_our_service' => array( // <-- shortcode tag name

		            'name' => __('Our Service', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Drubo Ourservice', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(


		         	'Front Content' => array(

		                array(
		                    'name' => 'front_icon',
		                    'label' => __('Icon',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'icon_picker',
		                    'value' => 'fa-mobile'
		                ),
		                array(
		                    'name' => 'front_title',
		                    'label' => __('Title',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'Mobile App Development'
		                ),
		                array(
		                    'name' => 'custom_css_class',
		                    'label' => __('CSS Class',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'description' => __('Custom css class for css customisation',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text'
		                ),
		         	), // content
		         	'Hover Content' => array(

		                array(
		                    'name' => 'hover_icon',
		                    'label' => __('Icon',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'icon_picker',
		                    'value' => 'fa-mobile'
		                ),
		                array(
		                    'name' => 'hover_title',
		                    'label' => __('Title',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'GRAPHIC DESIGN'
		                ),
		                array(
		                    'name' => 'hover_desc',
		                    'label' => __('Description',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicings, eli sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim

'
		                ),

		         	), // content
		        // .............................................
		        // ..... // Styling
		        // .............................................
		                    'styling' => array(
		                    	array(
		                    		'name' => 'custom_css',
		                    		'type' => 'css',
		                    		'options' => array(
		                    			array(
		                    				'screens' => 'any,1024,999,767,479',
		                    				'Counter Value'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .sucs-count h3 span'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .sucs-count h3 span' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .sucs-count h3 span'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .sucs-count h3 span'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .sucs-count h3 span'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .sucs-count h3 span' 
		                    					),
		                    				),
		                    				'Title'   => array(
		                    					array(
		                    						'property' => 'font-family', 
		                    						'label' => 'Font Family', 
		                    						'selector' => '+ .sucs-count h3'
		                    					),
		                    					array( 
		                    						'property' => 'font-size', 
		                    						'label' => 'Font Size', 
		                    						'selector' => '+ .sucs-count h3' 
		                    					),
		                    					array(
		                    						'property' => 'font-weight', 
		                    						'label' => 'Font Weight', 
		                    						'selector' => '+ .sucs-count h3'
		                    					),
		                    					array(
		                    						'property' => 'text-align', 
		                    						'label' => 'Text Align', 
		                    						'selector' => '+ .sucs-count h3'
		                    					),
		                    					array(
													'property' => 'text-transform', 
													'label' => 'Text Transform', 
													'selector' => '+ .sucs-count h3'
												),
		                    					array( 
		                    					    'property' => 'color', 
		                    					    'label' => 'Color', 
		                    					    'selector' => '+ .sucs-count h3' 
		                    					),
		                    				),
		                    				'Icon'   => array(
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Icon color', 
		                    						'selector' => '+ .sucs-icon a i'
		                    					),
		                    					array( 
		                    						'property' => 'background-color', 
		                    						'label' => 'Icon Backgrount Color', 
		                    						'selector' => '+ .sucs-icon a' 
		                    					),
		                    					array(
		                    						'property' => 'background-color', 
		                    						'label' => 'Icon Hover Background color', 
		                    						'selector' => '+ .successful-single:hover .sucs-icon a'
		                    					),
		                    					array(
		                    						'property' => 'color', 
		                    						'label' => 'Hover Icon color', 
		                    						'selector' => '+ .successful-single:hover .sucs-icon a i'
		                    					),
		                    				),

		                    				
		                    			)
		                    		) //End of options
		                    	)
		                    ), //End of styling
                            'animate' => array(
								array(
									'name'    => 'animate',
									'type'    => 'animate'
								)
							), //End of animate
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


function drubo_our_service_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
        	// Front
                'front_title' => '',
                'front_icon' => '',
            // Hover
                'hover_title' => '',
                'hover_icon' => '',
                'hover_desc' => '',
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
	<div class="service-single text-center mb-30">
		<div class="srvc-icon pb-30">
			<i class="front-icon <?php echo $front_icon; ?>"></i>
		</div>
		<div class="srvc-titel">
			<h6 class="front-title"><?php echo $front_title; ?></h6>
		</div>
		<div class="service-hover text-center">
			<div class="hvr-icon">
				<i class="hover-icon <?php echo $hover_icon; ?>" aria-hidden="true"></i>
				<h6 class="hover-title"><?php echo $hover_title; ?></h6>
				<p class="hover-desc"><?php echo $hover_desc ?></p>
			</div>
		</div>
	</div>
</div>


<?php
    return ob_get_clean();
}
add_shortcode('drubo_our_service','drubo_our_service_func');