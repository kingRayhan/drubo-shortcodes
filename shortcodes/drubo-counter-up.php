<?php
/*
 * Drubo Counter Up
 * Author: Hastech
 * Author URI: http://hastech.company
 * Version: 1.0.0
 * ======================================================
 */
add_action('init', 'drubo_counter_up'); // Call kc_add_map function ///

if(!function_exists('drubo_counter_up')):
	function drubo_counter_up(){
		if(function_exists('kc_add_map')): // if kingComposer is active
		kc_add_map(
		    array(
		        'drubo_counter_up' => array( // <-- shortcode tag name

		            'name' => __('Counter UP', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'description' => __('Drubo Section Title', DRUBO_SHORTCODE_TEXT_DOMAIN),
		            'icon' => 'kc-icon-progress',
		            'category' => DRUBO_SHORTCODE_CATEGORY,
		            'params' => array(
		        // .............................................
		        // ..... // Content TAB
		        // .............................................

		         	'Content' => array(

		                array(
		                    'name' => 'title',
		                    'label' => __('Title',DRUBO_SHORTCODE_TEXT_DOMAIN),
		                    'type' => 'text',
		                    'value' => 'CUPS OF COFFEE'
		                ),

		                array(
		                    'name' => 'count',
		                    'label' => __('Title',DRUBO_SHORTCODE_TEXT_DOMAIN),
							'type' => 'number_slider',  // USAGE RADIO TYPE
							'options' => array(    // REQUIRED
								'min' => 0,
								'max' => 5000,
								'show_input' => true
							),
							'value' => '395'
		                ),

		                array(
		                    'name' => 'icon',
		                    'label' => __('Icon',DRUBO_SHORTCODE_TEXT_DOMAIN),
							'type' => 'icon_picker',  // USAGE RADIO TYPE
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


function drubo_counter_up_func($atts,$content){
ob_start();
        $drubo_shortcode_atts = shortcode_atts(array(
                'title' => '',
                'count' => '',
                'icon' => '',
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
	<div class="successful-single">
		<div class="sucs-icon">
			<a href="#"><i class="<?php echo $icon; ?>"></i></a>
		</div>
		<div class="sucs-count text-uppercase text-white">
			<h3><span class="counter"><?php echo $count; ?></span></h3>
			<h3><?php echo $title; ?></h3>
		</div>
	</div>	
</div>
<?php
    return ob_get_clean();
}
add_shortcode('drubo_counter_up','drubo_counter_up_func');